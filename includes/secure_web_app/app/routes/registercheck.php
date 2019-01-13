<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->map(/**
 * @param Request $request
 * @param Response $response
 * @return mixed
 */
    ['GET', 'POST'], '/registercheck', function (Request $request, Response $response) {

    $validator = $this->get('validator');
    $bcrypt = $this->get('bcrypt_wrapper');
    $libsodium_wrapper = $this->get('libsodium_wrapper');
    $base64_wrapper = $this->get('base64_wrapper');
    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');
    $user_model = $this->get('user_model');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);

    if ($wrapper_sql->session_var_exists(session_id())) {

        $arr_tainted_params = $request->getParsedBody();

        $username = $arr_tainted_params['username'];
        $password = $arr_tainted_params['password'];
        $name = $arr_tainted_params['name'];
        $surname = $arr_tainted_params['surname'];

        $validated_username = $validator->sanitise_string($username);
        $hashed_password = $bcrypt->create_hashed_password($validator->sanitise_string($password));
        $validated_name = $validator->sanitise_string($name);
        $validated_surname = $validator->sanitise_string($surname);

        if (empty($validated_username) || empty($hashed_password) || empty($validated_name) || empty($validated_surname)) {
            return $this->view->render($response,
                'register.html.twig',
                [
                    'css_path' => CSS_PATH,
                    'error_message' => $validator->sanitise_string('All fields must be filled'),
                ]);
        }

        if ($validator->validate_username_password($validated_username) && $validator->validate_username_password($validator->sanitise_string($password))) {
            if ($wrapper_sql->username_var_exists($validated_username)) {
                return $this->view->render($response,
                    'register.html.twig',
                    [
                        'css_path' => CSS_PATH,
                        'error_message' => $validator->sanitise_string($validated_username . ' username is taken'),
                    ]);
            }
        } else {

            return $this->view->render($response,
                'register.html.twig',
                [
                    'css_path' => CSS_PATH,
                    'error_message' => $validator->sanitise_string('Username and password must be between 3 and 30 characters'),
                ]);

        }

        $encrypted_name = $libsodium_wrapper->encrypt($validated_name);
        $encoded_name = $base64_wrapper->encode_base64($encrypted_name);

        $encrypted_surname = $libsodium_wrapper->encrypt($validated_surname);
        $encoded_surname = $base64_wrapper->encode_base64($encrypted_surname);

        $user_model->set_user_values($validated_username, $hashed_password, $encoded_name, $encoded_surname);
        $user_model->set_wrapper_user_db($wrapper_sql);
        $user_model->set_db_handle($db_handle);
        $user_model->set_sql_queries($sql_queries);
        $user_model->store_data();

        return $this->view->render($response,
            'register.html.twig',
            [
                'css_path' => CSS_PATH,
                'error_message' => $validator->sanitise_string('New user created succesfully'),
            ]);

    } else {
        return $this->response->withRedirect('/SecureWebApp/index.php/');
    }

})->setName('registercheck');
