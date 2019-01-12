<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/logincheck', function(Request $request, Response $response)
{
    
    $arr_tainted_params = $request->getParsedBody();

    $validator = $this->get('validator');

    $username = $arr_tainted_params['username'];
    $password = $arr_tainted_params['password'];

    $sanitised_username = $validator->sanitise_string($username);
    $sanitised_password = $validator->sanitise_string($password);

    $session_wrapper = $this->get('session_wrapper');
    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $bcrypt = $this->get('bcrypt_wrapper');


    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($bcrypt->authenticate_password($sanitised_password, $wrapper_sql->user_var_exists($sanitised_username))) {

        $session_model->set_session_values($sanitised_username, $sanitised_password);
        $session_model->set_wrapper_session_db($wrapper_sql);
        $session_model->set_db_handle($db_handle);
        $session_model->set_sql_queries($sql_queries);
        $session_model->store_data();

        $store_result = $session_model->get_storage_result();


        return $this->view->render($response,
        'homepage.html.twig',
        [
            'css_path' => CSS_PATH,
            'logout' => '/SecureWebApp/index.php/login',
            'register' => '/SecureWebApp/index.php/register',

        ]);

    } else {
        
        return $this->view->render($response,
        'login.html.twig',
        [
            'css_path' => CSS_PATH,
            'error_message' => $validator->sanitise_string('Incorrect username or password'),
            'action_login' => '/SecureWebApp/index.php/logincheck',

        ]);

    }
})->setName('logincheck');
