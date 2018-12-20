<?php
/**
 * Created by PhpStorm.
 * User: php-slim
 * Date: 19/12/18
 * Time: 16:47
 */

class messageModel
{

    private $message;
    private $username;
    private $password;

    public function __construct(){}

    public function __destruct(){}

    private function createSoapClient()
    {
        $obj_soap_client_handle = false;
        $wsdl = WSDL;
        $arr_soapclient = ['trace' => true, 'exceptions' => true];

        try
        {
            $obj_soap_client_handle = new SoapClient($wsdl, $arr_soapclient);
//            var_dump($obj_soap_client_handle->__getFunctions());
//            var_dump($obj_soap_client_handle->__getTypes());
        }
        catch (SoapFault $obj_exception)
        {
            trigger_error($obj_exception);
        }

        return $obj_soap_client_handle;
    }

    private function retrieveMessages($obj_soap_client_handle)
    {
        $result = null;
        $webservicefunction = 'readMessages';
        $parameters = new stdClass();
        $parameters->username = $this->username;
        $parameters->password = $this->password;
        try
        {
            $result = $obj_soap_client_handle->{$webservicefunction}($parameters);

//      var_dump($obj_soap_client_handle->__getLastRequest());
//      var_dump($obj_soap_client_handle->__getLastResponse());
//      var_dump($obj_soap_client_handle->__getLastRequestHeaders());
//      var_dump($obj_soap_client_handle->__getLastResponseHeaders());
        }
        catch (SoapFault $obj_exception)
        {
            trigger_error($obj_exception);
        }

        return $result;
    }

}