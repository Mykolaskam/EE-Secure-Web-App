<?php
/**
 * ProfileModel.php
 *
 * This class is used to create a profile for each user that signs up to the app. It provides functions set the users
 * details as well as retrieving them.
 */

class UserModel
{
 


    private $c_username;
    private $c_password;
    private $c_first_name;
    private $c_last_name;
    private $c_validated;


    public function __construct(){}

    public function __destruct(){}


    public function set_user_info($p_username, $p_password, $p_first_name, $p_last_name)
    {
        $this->c_username = $p_username;
        $this->c_password = $p_password;
        $this->c_first_name = $p_first_name;
        $this->c_last_name = $p_last_surname;
        $this->c_validated = session_id();
       
    }

   
}