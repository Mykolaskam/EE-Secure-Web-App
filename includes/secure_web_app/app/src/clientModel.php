<?php
/**
 * Created by PhpStorm.
 * User: php-slim
 * Date: 19/12/18
 * Time: 16:47
 */

class clientModel
{

    private $username;
    private $password;
    private $groupnumber;

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
//           var_dump($obj_soap_client_handle->__getFunctions());
//           var_dump($obj_soap_client_handle->__getTypes());
        }
        catch (SoapFault $obj_exception)
        {
            trigger_error($obj_exception);
        }

        return $obj_soap_client_handle;
    }

    public function retrieveMessages()
    {
        $obj_soap_client_handle = $this->createSoapClient();
        $result_array = [];
        try
        {
            $result_array = $obj_soap_client_handle->peekMessages($this->username,$this->password,"","");
//      var_dump($obj_soap_client_handle->__getLastRequest());
//      var_dump($obj_soap_client_handle->__getLastResponse());
//      var_dump($obj_soap_client_handle->__getLastRequestHeaders());
//      var_dump($obj_soap_client_handle->__getLastResponseHeaders());
            $filtered_array = [];
            foreach($result_array as $message){
                if(strpos($message,$this->groupnumber) !== false){
                    array_push($filtered_array,$message);
                }
                $result = $filtered_array;
            }
        }
        catch (SoapFault $obj_exception)
        {
            trigger_error($obj_exception);
        }

        return $result;
    }


    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setGroupNumber($groupnumber)
    {
        $this->groupnumber = $groupnumber;
    }

    public function setAllParameters($username,$password,$groupnumber)
    {
        $this->username = $username;
        $this->password = $password;
        $this->groupnumber = $groupnumber;


    }

}