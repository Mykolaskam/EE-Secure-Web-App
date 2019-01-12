<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/homepage', function(Request $request, Response $response)
{
    return $this->view->render($response,
        'homepage.html.twig',
        [
            'css_path' => CSS_PATH,
            'logout' => '/SecureWebApp/index.php/login',
            'register' => '/SecureWebApp/index.php/register',
            'logout' => '/SecureWebApp/index.php/',


        ]);
})->setName('homepage');
