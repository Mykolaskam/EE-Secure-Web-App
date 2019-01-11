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
    $data = $msg_model->retrieveMessages();


        foreach($data as $item){
            $xml_model = $this->get('xmlmodel');
            $xml_model->__construct();
            $xml_model->set_xml_string_to_parse($item);
            $xml_model->parse_the_xml_string();
            var_dump(($xml_model));

    }
    });