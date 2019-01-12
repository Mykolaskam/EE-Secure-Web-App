<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $request, Response $response)
{

    return $this->view->render($response,
        'login.html.twig',
        [
            'css_path' => CSS_PATH,
            'action_login' => '/SecureWebApp/index.php/logincheck',
        ]);
        
})->setName('login');
