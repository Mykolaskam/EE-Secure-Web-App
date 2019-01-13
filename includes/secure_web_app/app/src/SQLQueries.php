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
	public function __construct() { }

	public function __destruct() { }

	public static function create_new_user()
	{
		$m_query_string  = "INSERT INTO users ";
		$m_query_string .= "SET username = :local_username, ";
		$m_query_string .= "password = :local_password, ";
		$m_query_string .= "name = :local_name, ";
		$m_query_string .= "surname = :local_surname ";
		return $m_query_string;
	}


	public static function check_user_exists()
	{
	  $m_query_string  = "SELECT password ";
	  $m_query_string .= "FROM users ";
	  $m_query_string .= "WHERE username = :local_username ";
	  return $m_query_string;
	}

	public static function check_username_exists()
	{
	  $m_query_string  = "SELECT username ";
	  $m_query_string .= "FROM users ";
	  $m_query_string .= "WHERE username = :local_username ";
	  return $m_query_string;
	}


  public static function check_session_var()
  {
    $m_query_string  = "SELECT session_var_name ";
    $m_query_string .= "FROM session ";
    $m_query_string .= "WHERE session_id = :local_session_id ";
    $m_query_string .= "LIMIT 1";
    return $m_query_string;
  }

  public static function create_session_var()
	{
		$m_query_string  = "INSERT INTO session ";
		$m_query_string .= "SET session_id = :local_session_id, ";
		$m_query_string .= "session_var_name = :session_var_name, ";
		$m_query_string .= "session_value = :session_var_value ";
		return $m_query_string;
	}

	public static function delete_session_var()
	{
		$m_query_string  = "DELETE FROM session ";
		$m_query_string .= "WHERE session_id = :local_session_id ";
		return $m_query_string;
	}

	public static function set_session_var()
	{
		$m_query_string  = "UPDATE session ";
		$m_query_string .= "SET session_value = :session_var_value ";
		$m_query_string .= "WHERE session_id = :local_session_id ";
		$m_query_string .= "AND session_var_name = :session_var_name";
		return $m_query_string;
	}

	public static function get_session_var()
	{
		$m_query_string  = "SELECT session_value ";
		$m_query_string .= "FROM session ";
		$m_query_string .= "WHERE session_id = :local_session_id ";
		$m_query_string .= "AND session_var_name = :session_var_name";
		return $m_query_string;
	}

	public static function get_messages()
	{
		$m_query_string  = "SELECT * ";
		$m_query_string .= "FROM messages ";
		$m_query_string .= "ORDER BY time DESC ";
		return $m_query_string;
		
	}

	public static function create_message()
	{
		$m_query_string  = "REPLACE INTO messages ";
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
