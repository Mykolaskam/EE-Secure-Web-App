<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(/**
 * @param Request $request
 * @param Response $response
 * @return mixed
 */
    ['GET', 'POST'], '/homepage', function (Request $request, Response $response) use ($app) {

    $soap_model = $this->get('soapmodel');
    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $session_model = $this->get('session_model');
    $bcrypt = $this->get('bcrypt_wrapper');
    $libsodium_wrapper = $this->get('libsodium_wrapper');
    $base64_wrapper = $this->get('base64_wrapper');
    $validator = $this->get('validator');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $username = M2MUSER;
        $password = M2MPASS;
        $soap_model->set_all_parameters($username, $password, '18-3110-AN');
        $data = $soap_model->retrieve_messages();
        $message_array = [];

        foreach ($data as $item) {
            $msgmodel = $this->get('msgmodel');
            $xml_model = $this->get('xmlmodel');
            $xml_model->__construct();
            $xml_model->set_xml_string_to_parse($item);
            $xml_model->parse_the_xml_string();
            $msgmodel->setParameters($xml_model->get_parsed_data());

            $source = $validator->sanitise_string($msgmodel->getSource());
            $destination = $validator->sanitise_string($msgmodel->getDestination());
            $time = $validator->sanitise_string($msgmodel->getTime());
            $id = $validator->sanitise_string($msgmodel->getId());
            $switch1 = $validator->sanitise_string($msgmodel->getSwitch1());
            $switch2 = $validator->sanitise_string($msgmodel->getSwitch2());
            $switch3 = $validator->sanitise_string($msgmodel->getSwitch3());
            $switch4 = $validator->sanitise_string($msgmodel->getSwitch4());
            $fan = $validator->sanitise_string($msgmodel->getFan());
            $temperature = $validator->sanitise_string($msgmodel->getTemp());
            $key = $validator->sanitise_string($msgmodel->getKey());

            $wrapper_sql->create_message_var($source, $destination, $time, $id, $switch1, $switch2, $switch3, $switch4, $fan, $temperature, $key);
            $message_array = $wrapper_sql->get_messages_var();
        }

        return $this->view->render($response,
            'homepage.html.twig',
            [
                'css_path' => CSS_PATH,
                'logout' => '/SecureWebApp/index.php/logout',
                'message_array' => $message_array,
                'register' => '/SecureWebApp/index.php/register',

            ]);

    } else {

        $arr_tainted_params = $request->getParsedBody();

        $username = $arr_tainted_params['username'];
        $password = $arr_tainted_params['password'];

        $sanitised_username = $validator->sanitise_string($username);
        $sanitised_password = $validator->sanitise_string($password);

        $wrapper_sql->set_db_handle($db_handle);
        $wrapper_sql->set_sql_queries($sql_queries);

        if (empty($sanitised_username) || empty($sanitised_password)) {

            return $this->view->render($response,
                'login.html.twig',
                [
                    'css_path' => CSS_PATH,
                    'error_message' => $validator->sanitise_string('Username or password cannot be empty'),
                    'action_register' => '/SecureWebApp/index.php/registercheck',
                ]);
        }

        if ($bcrypt->authenticate_password($sanitised_password, $wrapper_sql->user_var_exists($sanitised_username))) {

            $session_model->set_session_values($sanitised_username);
            $session_model->set_wrapper_session_db($wrapper_sql);
            $session_model->set_db_handle($db_handle);
            $session_model->set_sql_queries($sql_queries);
            $session_model->store_data();
            $store_result = $session_model->get_storage_result();
            return $this->response->withRedirect('/SecureWebApp/index.php/homepage');

        } else {

            return $this->view->render($response,
                'login.html.twig',
                [
                    'css_path' => CSS_PATH,
                    'error_message' => $validator->sanitise_string('Incorrect username or password'),
                    'action_register' => '/SecureWebApp/index.php/registercheck',
                ]);

        }

    }
})->setName('homepage');
