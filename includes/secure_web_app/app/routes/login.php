<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $request, Response $response)
{
    $soap_model = $this->get('soapmodel');
    $session_wrapper = $this->get('session_wrapper');
    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $bcrypt = $this->get('bcrypt_wrapper');

    $session_model->set_wrapper_session_db($wrapper_sql);
    $session_model->set_db_handle($db_handle);
    $session_model->set_sql_queries($sql_queries);

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        return $this->response->withRedirect('/SecureWebApp/index.php/homepage');

    }
    else {

    return $this->view->render($response,
        'login.html.twig',
        [
            'css_path' => CSS_PATH,
            'action_login' => '/SecureWebApp/index.php/homepage',
        ]);

    }
        
})->setName('login');
