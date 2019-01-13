<?php

/**
 * SessionWrapper.php
 *
 * create a wrapper for the SESSION global array
 *
 * Author: CF Ingrams
 * Email: <clinton@cfing.co.uk>
 * Date: 22/10/2017
 *
 *
 * @author CF Ingrams <clinton@cfing.co.uk>
 * @copyright CFI
 *
 */

class SessionWrapper
{
    /**
     * SessionWrapper constructor.
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
     * @param $p_session_key
     * @param $p_session_value_to_set
     * @return bool
     */
    public static function set_session($p_session_key, $p_session_value_to_set)
    {
        $m_session_value_set_successfully = false;
        if (!empty($p_session_value_to_set)) {
            $_SESSION[$p_session_key] = $p_session_value_to_set;
            if (strcmp($_SESSION[$p_session_key], $p_session_value_to_set) == 0) {
                $m_session_value_set_successfully = true;
            }
        }
        return $m_session_value_set_successfully;
    }

    /**
     * @param $p_session_key
     * @return bool
     */
    public static function get_session($p_session_key)
    {
        $m_session_value = false;

        if (isset($_SESSION[$p_session_key])) {
            $m_session_value = $_SESSION[$p_session_key];
        }
        return $m_session_value;
    }

    /**
     * @param $p_session_key
     * @return bool
     */
    public static function unset_session($p_session_key)
    {
        $m_unset_session = false;
        if (isset($_SESSION[$p_session_key])) {
            unset($_SESSION[$p_session_key]);
        }
        if (!isset($_SESSION[$p_session_key])) {
            $m_unset_session = true;
        }
        return $m_unset_session;
    }
}
