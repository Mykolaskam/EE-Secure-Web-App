<?php

/**
 * SQLQueries.php
 *
 * hosts all SQL queries to be used by the Model
 *
 * Author: CF Ingrams
 * Email: <clinton@cfing.co.uk>
 * Date: 22/10/2017
 *
 * @author CF Ingrams <clinton@cfing.co.uk>
 * @copyright CFI
 */

class SQLQueries
{
    /**
     * SQLQueries constructor.
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
     * inserts new user into database table users with values passed in sqlwrapper
     * @return string
     */
    public static function create_new_user()
    {
        $m_query_string = "INSERT INTO users ";
        $m_query_string .= "SET username = :local_username, ";
        $m_query_string .= "password = :local_password, ";
        $m_query_string .= "name = :local_name, ";
        $m_query_string .= "surname = :local_surname ";
        return $m_query_string;
    }

    /**
     * Gets password of an existing user from users table with value :local_username passed in sqlwrapper
     * @return string
     */
    public static function get_password()
    {
        $m_query_string = "SELECT password ";
        $m_query_string .= "FROM users ";
        $m_query_string .= "WHERE username = :local_username ";
        return $m_query_string;
    }

    /**
     * Gets password of an existing user from users table with value :local_username passed in sqlwrapper
     * @return string
     */
    public static function get_username()
    {
        $m_query_string = "SELECT username ";
        $m_query_string .= "FROM users ";
        $m_query_string .= "WHERE username = :local_username ";
        return $m_query_string;
    }

    /**
     * Selects session_var_name from table session where session id matches local session id
     * @return string
     */
    public static function check_session_var()
    {
        $m_query_string = "SELECT session_var_name ";
        $m_query_string .= "FROM session ";
        $m_query_string .= "WHERE session_id = :local_session_id ";
        $m_query_string .= "LIMIT 1";
        return $m_query_string;
    }

    /**
     *
     * inserts into table session session_id, session_var_name and session_var_value passed in sqlwrapper
     * @return string
     */
    public static function create_session_var()
    {
        $m_query_string = "INSERT INTO session ";
        $m_query_string .= "SET session_id = :local_session_id, ";
        $m_query_string .= "session_var_name = :session_var_name, ";
        $m_query_string .= "session_value = :session_var_value ";
        return $m_query_string;
    }

    /**
     * function deletes a row from session table where session_id matches local session id passed in sqlwrapper
     * @return string
     */
    public static function delete_session_var()
    {
        $m_query_string = "DELETE FROM session ";
        $m_query_string .= "WHERE session_id = :local_session_id ";
        return $m_query_string;
    }

    /**
     * updates a row in session table - sets session_value with session_var_value passed in sqlwrapper where session_id matches local session id and session_var_name matches session_var_name both parameters passed in sqlwrapper
     * @return string
     */
    public static function set_session_var()
    {
        $m_query_string = "UPDATE session ";
        $m_query_string .= "SET session_value = :session_var_value ";
        $m_query_string .= "WHERE session_id = :local_session_id ";
        $m_query_string .= "AND session_var_name = :session_var_name";
        return $m_query_string;
    }

    /**
     * gets session value from session table where session_id matches local_session_id and session_var_name matches session_var_name both values passed in sqlwrapper
     * @return string
     */
    public static function get_session_var()
    {
        $m_query_string = "SELECT session_value ";
        $m_query_string .= "FROM session ";
        $m_query_string .= "WHERE session_id = :local_session_id ";
        $m_query_string .= "AND session_var_name = :session_var_name";
        return $m_query_string;
    }

    /**
     * Gets all rows from messages table and orders it by time in descending order
     * @return string
     */
    public static function get_messages()
    {
        $m_query_string = "SELECT * ";
        $m_query_string .= "FROM messages ";
        $m_query_string .= "ORDER BY time DESC ";
        return $m_query_string;

    }

    /**
     * This function inserts a new row into messages table with all parameters passed in sqlwrapper. REPLACE ensures that the same exact message is not inserted.
     * @return string
     */
    public static function create_message()
    {
        $m_query_string = "REPLACE INTO messages ";
        $m_query_string .= "SET source = :local_source, ";
        $m_query_string .= "destination = :local_destination, ";
        $m_query_string .= "time = :local_time, ";
        $m_query_string .= "group_id = :local_group_id, ";
        $m_query_string .= "switch_1 = :local_switch_1, ";
        $m_query_string .= "switch_2 = :local_switch_2, ";
        $m_query_string .= "switch_3 = :local_switch_3, ";
        $m_query_string .= "switch_4 = :local_switch_4, ";
        $m_query_string .= "fan = :local_fan, ";
        $m_query_string .= "temperature = :local_temperature, ";
        $m_query_string .= "last_key = :local_last_key ";
        return $m_query_string;
    }

}
