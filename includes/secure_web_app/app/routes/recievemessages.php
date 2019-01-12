<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/recievemessages',
    function (Request $request, Response $response) use ($app){
    //$arr_tainted_params = $request->getParsedBody();
    $soap_model = $this->get('soapmodel');
    $username = M2MUSER;
    $password = M2MPASS;
    $soap_model->setAllParameters($username,$password,'18-3110-AN');
    $data = $soap_model->retrieveMessages();
    $message_array = [];

        foreach($data as $item) {
            $msgmodel =  $this->get('msgmodel');
            $xml_model = $this->get('xmlmodel');
            $xml_model->__construct();
            $xml_model->set_xml_string_to_parse($item);
            $xml_model->parse_the_xml_string();
            $msgmodel->setParameters($xml_model->get_parsed_data());
            $message_array[] = $msgmodel;
            var_dump($message_array);

        }
            return $this->view->render($response,
                'homepage.html.twig',
                [
                    'css_path' => CSS_PATH,
                    'logout' => '/SecureWebApp-master/SecureWebApp/public_php/SecureWebApp/index.php/login',
                    'message_array' => $message_array,

                ]);


});