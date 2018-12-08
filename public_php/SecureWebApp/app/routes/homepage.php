<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/', function(Request $request, Response $response)
{
    return $this->view->render($response,
        'homepage.html.twig',
        [
            'logout' => 'index.php/login',
        ]);
})->setName('homepage');
