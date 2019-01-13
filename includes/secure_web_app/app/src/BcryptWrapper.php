<?php
/**
 * Wrapper class for the PHP BCrypt library.  Takes the pain out of using the library.
 *
 * @author CF Ingrams <cfi@dmu.ac.uk>
 * @copyright De Montfort University
 */

class BcryptWrapper
{

    /**
     * BcryptWrapper constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }

    /**
     * Function takes string as a parameter and assigns it to a password hash variable.
     * bcrypt hashed password is initialised as na empty string.
     * In case pasword to hash variable is not empty the password is hashed with a custom cost using password hash algorithm .
     * hashed password is returned.
     * @param $string_to_hash
     * @return bool|string
     */
    public function create_hashed_password($string_to_hash)
    {
        $password_to_hash = $string_to_hash;
        $bcrypt_hashed_password = '';

        if (!empty($password_to_hash)) {
            $arr_options = array('cost' => BCRYPT_COST);
            $bcrypt_hashed_password = password_hash($password_to_hash, BCRYPT_ALGO, $arr_options);
        }
        return $bcrypt_hashed_password;
    }

    /**
     * This function require two parameters passed. $string_to_check is user provided password and $stored_user_password_hash is already hashed password stored.
     * Function initialises user authenticated variable set to false.
     * string_to_check is assigned to current user password and  $stored_user_password_hash is assigned to stored user password hash.
     * if the provided password is not empty and stored password hash is not empty - password_veryfy is used to check user given password will match stored password hash.
     * If password is authenticated - user authenticated will return true otherwise false.
     *
     * @param $string_to_check
     * @param $stored_user_password_hash
     * @return bool
     */
    public function authenticate_password($string_to_check, $stored_user_password_hash)
    {
        $user_authenticated = false;
        $current_user_password = $string_to_check;
        $stored_user_password_hash = $stored_user_password_hash;

        if (!empty($current_user_password) && !empty($stored_user_password_hash)) {
            if (password_verify($current_user_password, $stored_user_password_hash)) {
                $user_authenticated = true;
            }
        }
        return $user_authenticated;
    }
}
