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
    private $c_name;
    private $c_surname;
    private $c_arr_storage_result;
    private $c_obj_wrapper_session_file;
    private $c_obj_wrapper_session_db;
    private $c_obj_db_handle;
    private $c_obj_sql_queries;
  
    public function __construct()
    {
      $this->c_username = null;
      $this->c_password = null;
      $this->c_name = null;
      $this->c_surname = null;
      $this->c_arr_storage_result = null;
      $this->c_obj_wrapper_session_file = null;
      $this->c_obj_wrapper_session_db = null;
      $this->c_obj_db_handle = null;
      $this->c_obj_sql_queries = null;
    }
  
    public function __destruct() { }
  
    public function set_user_values($p_username, $p_password, $p_name, $p_surname)
    {
      $this->c_username = $p_username;
      $this->c_password = $p_password;
      $this->c_name = $p_name;
      $this->c_surname = $p_surname;
    }
  
  
    public function set_db_handle($p_obj_db_handle)
    {
      $this->c_obj_db_handle = $p_obj_db_handle;
    }
  
    public function set_sql_queries($p_obj_sql_queries)
    {
      $this->c_obj_sql_queries = $p_obj_sql_queries;
    }
  
    public function store_data()
    {
       $this->c_arr_storage_result['database'] = $this->store_data_in_database();
    }
  
    public function get_storage_result()
    {
      return $this->c_arr_storage_result;
    }
  
    public function store_data_in_database()
    {
      $m_store_result = false;
  
      $this->c_obj_wrapper_session_db->set_db_handle( $this->c_obj_db_handle);
      $this->c_obj_wrapper_session_db->set_sql_queries( $this->c_obj_sql_queries);
  
      $m_store_result = $this->c_obj_wrapper_session_db->create_user_var($this->c_username, $this->c_password, $this->c_name, $this->c_username);

      return $m_store_result;
    }
  }
  