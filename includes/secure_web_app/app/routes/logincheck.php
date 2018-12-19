<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->post('/logincheck', function(Request $request, Response $response)
{

    $arr_tainted_params = $request->getParsedBody();



    $username = $arr_tainted_params['username'];
    $password = $arr_tainted_params['password'];


    return $this->view->render($response,
        'display.html.twig',
        [

            'username' => $username,
            'password' => $password,

        ]);
})->setName('logincheck');
