<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get(/**
 * @param Request $request
 * @param Response $response
 * @return mixed
 */
    '/register', function (Request $request, Response $response) {

    $wrapper_sql = $this->get('sql_wrapper');
    $db_handle = $this->get('dbase');
    $sql_queries = $this->get('sql_queries');

    $wrapper_sql->set_db_handle($db_handle);
    $wrapper_sql->set_sql_queries($sql_queries);


    if ($wrapper_sql->session_var_exists(session_id())) {
        return $this->view->render($response,
            'register.html.twig',
            [
                'css_path' => CSS_PATH,
                'action_register' => '/SecureWebApp/index.php/registercheck',

            ]);
    } else {

        return $this->response->withRedirect('/SecureWebApp/index.php/');

    }


})->setName('register');
