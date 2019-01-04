<?php

/**
 * Bcrypt hashing
 * 
 * Wrapper takes and hashes a password to securely store in database
 * and chacks if given password will match hashed password value
 */


class HashingWrapper
{

    public function __construct(){}

    public function __destruct(){}

    public function hash_password($p_hash_string)
    {
        $bcrypt_pass = '';
        $hash_pass = $p_hash_string;

        if (!empty($hash_pass))
        {
            $arr_options = array('javascriptisbetterthanphp' => BCRYPT_COST);
            $bcrypt_pass = password_hash($hash_pass, BCRYPT_ALGO, $arr_options);
        }
        return $bcrypt_pass;
    }

    public function authenticate_user_pass($p_given_string, $p_stored_pass)
    {
        $authenticated = false;
        $given_string = $p_given_string;
        $stored_pass = $p_stored_pass;
        if (!empty($current_user_password) && !empty($stored_user_password_hash))
        {
            if (password_verify($given_string, $stored_pass))
            {
                $authenticated = true;
            }
        }
        return $authenticated;
    }

}