<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/recievemessages',
    function (Request $request, Response $response) use ($app){
    //$arr_tainted_params = $request->getParsedBody();
    $soap_model = $this->get('soapmodel');
    $validator = $this->get('validator');
    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');

    $username = M2MUSER;
    $password = M2MPASS;
    $soap_model->setAllParameters($username,$password,'18-3110-AN');
    $data = $soap_model->retrieveMessages();
    $message_array = [];
        $wrapper_sql->set_db_handle($db_handle);
        $wrapper_sql->set_sql_queries($sql_queries);
        foreach($data as $item) {
            $msgmodel =  $this->get('msgmodel');
            $xml_model = $this->get('xmlmodel');
            $xml_model->__construct();
            $xml_model->set_xml_string_to_parse($item);
            $xml_model->parse_the_xml_string();
            $msgmodel->setParameters($xml_model->get_parsed_data());
            $message_array[] = $msgmodel;

            $source = $validator->sanitise_string($msgmodel->getSource());
            $destination = $validator->sanitise_string( $msgmodel->getDestination());
            $time = $validator->sanitise_string( $msgmodel->getTime());
            $id = $validator->sanitise_string($msgmodel->getId());
            $switch1 = $validator->sanitise_string( $msgmodel->getSwitch1());
            $switch2 = $validator->sanitise_string($msgmodel->getSwitch2());
            $switch3 = $validator->sanitise_string($msgmodel->getSwitch3());
            $switch4 =$validator->sanitise_string( $msgmodel->getSwitch4());
            $fan = $validator->sanitise_string($msgmodel->getFan());
            $temperature = $validator->sanitise_string($msgmodel->getTemp());
            $key = $validator->sanitise_string($msgmodel->getKey());
            
            $wrapper_sql->create_message_var($source, $destination, $time, $id, $switch1, $switch2, $switch3, $switch4, $fan, $temperature, $key );
            

        }
;
        var_dump($wrapper_sql->get_messages_var());
            return $this->view->render($response,
                'homepage.html.twig',
                [
                    'css_path' => CSS_PATH,
                    'logout' => '/SecureWebApp-master/SecureWebApp/public_php/SecureWebApp/index.php/login',
                    'message_array' => $message_array,

                ]);


});