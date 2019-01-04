<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/recievemessages',
    function (Request $request, Response $response) use ($app){
    //$arr_tainted_params = $request->getParsedBody();
    $msg_model = $this->get('msgmodel');
    $username = M2MUSER;
    $password = M2MPASS;
    $msg_model->setAllParameters($username,$password,'18-3110-AN');
    var_dump($msg_model->retrieveMessages());

    });