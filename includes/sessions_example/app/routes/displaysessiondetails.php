<?php
/**
	* displaysessiondetails.php
	*
	* retrieve the session details from either the session file or the database
	*
	* produces a result according to the user entered values and calculation type
	*
	* Author: CF Ingrams
	* Email: <clinton@cfing.co.uk>
	* Date: 22/10/2015
	*
	* @author CF Ingrams <clinton@cfing.co.uk>
	*/
use Slim\Http\Response;
use Slim\Http\Request;

$app->post('/displaysessiondetails', function(Request $request,Response $response) use ($app)
{
    $session_wrapper = $this->get('session_wrapper');
    $session_model = $this->get('session_model');
    $session_model->set_wrapper_session_file($session_wrapper);
    $session_details = $session_model->get_session_details();
    $user_name = $session_details['user_name'];
    $password = $session_details['password'];
    return $this->view->render($response,
        'display_session_result.html.twig',
        [
            'landing_page' => $_SERVER["SCRIPT_NAME"],
            'css_path' => CSS_PATH,
            'page_title' => 'Sessions Demonstration',
            'page_heading_1' => 'Sessions Demonstration',
            'page_heading_2' => 'Session storage result',
            'storage_text' => 'The values stored were:',
            'username' => $user_name,
            'password' => $password
        ]);
});