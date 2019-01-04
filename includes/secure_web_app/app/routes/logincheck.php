<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/logincheck', function(Request $request, Response $response)
{
    

    $arr_tainted_params = $request->getParsedBody();

    $this->validator = $this->get('validator');

    $username = $arr_tainted_params['username'];
    $password = $arr_tainted_params['password'];

    $sanitised_username = $validator->sanitise_string($username);
    $validated_password = $validator->sanitise_string($password);

    $this->db_handle = $this->get('dbase');
    $this->validator = $this->get('validator');
    $this->sql_queries = $this->get('sql_queries');
    $this->sql_wrapper = $this->get('sql_wrapper');
    $this->sql_model = $this->get('sql_model');
    $this->user_model = $this->get('user_model');
    $this->session_model = $this->get('session_model');
    $this->hashing_wrpapper = $this->get('hashing_wrapper');




    return $this->view->render($response,
        'display.html.twig',
        [
            'username' => $sanitised_username,
            'password' => $password,
            'sql' => $login,
        ]);
})->setName('logincheck');
