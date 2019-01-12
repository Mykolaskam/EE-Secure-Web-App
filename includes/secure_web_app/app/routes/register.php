<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/register', function(Request $request, Response $response)
{
    return $this->view->render($response,
        'register.html.twig',
        [
            'css_path' => CSS_PATH,
            'action_register' => '/SecureWebApp/index.php/registercheck',
            
        ]);
})->setName('register');
