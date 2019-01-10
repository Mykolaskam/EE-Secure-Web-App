<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $request, Response $response)
{

    return $this->view->render($response,
        'login.html.twig',
        [
            'action_login' => '/SecureWebApp-master/SecureWebApp/public_php/SecureWebApp/index.php/logincheck',
            'action_register' => '/SecureWebApp-master/SecureWebApp/public_php/SecureWebApp/index.php/register',

        ]);
        
})->setName('login');
