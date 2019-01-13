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

    /**
     * This function is hidden and creates the connection between the web service and the M2M server via SOAP
     * it creates an object which has all the handles needed to make the soap request it then returns this object
     * @return obj|$obj_soap_client_model
     */
    private function create_soap_client()
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

    /**
     * Uses the private function create_soap_client in order to make a request to the M2M Server and gain all the messages
     * in the server. It then checks the group number to identify the messages we have send and filters these messages into
     * an array to be returned
     * @return $m_arr_result
     * returns a list of filtered messages as an array
     */
    public function retrieve_messages()
    {
        $obj_soap_client_handle = $this->create_soap_client();
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
                $m_arr_result = $filtered_array;
            }
        }
        catch (SoapFault $obj_exception)
        {
            trigger_error($obj_exception);
        }

        return $m_arr_result;
    }


    /**
     * Simple setter to set the username in the class
     * @param $p_username
     */
    public function set_username($p_username)
    {
        $this->username = $p_username;
    }


    /**
     * Simple setter to set the password in the class
     * @param $p_password
     */
    public function set_password($p_password)
    {
        $this->password = $p_password;
    }

    /**
     * Simple setter to set the group number
     * @param $p_groupnumber
     */
    public function set_group_number($p_groupnumber)
    {
        $this->groupnumber = $p_groupnumber;
    }

    /**
     * Takes in all three variables and stores them within the model to be used
     * @param $p_username
     * @param $p_password
     * @param $p_groupnumber
     */
    public function set_all_parameters($p_username, $p_password, $p_groupnumber)
    {
        $this->username = $p_username;
        $this->password = $p_password;
        $this->groupnumber = $p_groupnumber;


    }

}