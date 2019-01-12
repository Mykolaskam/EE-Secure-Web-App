<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/registercheck', function(Request $request, Response $response)
{
    
    $arr_tainted_params = $request->getParsedBody();

    $validator = $this->get('validator');
    $bcrypt = $this->get('bcrypt_wrapper');

    $username = $arr_tainted_params['username'];
    $password = $arr_tainted_params['password'];
    $name = $arr_tainted_params['name'];
    $surname = $arr_tainted_params['surname'];

    $validated_username = $validator->sanitise_string($username);
    $hashed_password = $bcrypt->create_hashed_password($validator->sanitise_string($password));
    $validated_name = $validator->sanitise_string($name);
    $validated_surname = $validator->sanitise_string($surname);

    //if ($validator->username_var_exists($validated_name)) {
        
    //}

    $session_wrapper = $this->get('session_wrapper');
    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $user_model = $this->get('user_model');

    $user_model->set_user_values($validated_username, $hashed_password, $validated_name, $validated_surname);
    $user_model->set_wrapper_user_db($wrapper_sql);
    $user_model->set_db_handle($db_handle);
    $user_model->set_sql_queries($sql_queries);
    $user_model->store_data();



    return $this->view->render($response,
        'register.html.twig',
        [
            'css_path' => CSS_PATH,
            'error_message' => $validator->sanitise_string('New user created succesfully'),
            
        ]);
})->setName('registercheck');
