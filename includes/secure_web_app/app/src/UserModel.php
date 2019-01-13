<?php
/**
 * ProfileModel.php
 *
 * This class is used to create a profile for each user that signs up to the app. It provides functions set the users
 * details as well as retrieving them.
 */

class UserModel
{
    /**
     * @var null
     */
    private $c_username;
    /**
     * @var null
     */
    private $c_password;
    /**
     * @var null
     */
    private $c_name;
    /**
     * @var null
     */
    private $c_surname;
    /**
     * @var null
     */
    private $c_arr_storage_result;
    /**
     * @var null
     */
    private $c_obj_wrapper_user_db;
    /**
     * @var null
     */
    private $c_obj_db_handle;
    /**
     * @var null
     */
    private $c_obj_sql_queries;

    /**
     * UserModel constructor.
     */
    public function __construct()
    {
        $this->c_username = null;
        $this->c_password = null;
        $this->c_name = null;
        $this->c_surname = null;
        $this->c_arr_storage_result = null;
        $this->c_obj_wrapper_user_db = null;
        $this->c_obj_db_handle = null;
        $this->c_obj_sql_queries = null;
    }

    /**
     *
     */
    public function __destruct()
    {
    }

    /**
     * @param $p_username
     * @param $p_password
     * @param $p_name
     * @param $p_surname
     */
    public function set_user_values($p_username, $p_password, $p_name, $p_surname)
    {
        $this->c_username = $p_username;
        $this->c_password = $p_password;
        $this->c_name = $p_name;
        $this->c_surname = $p_surname;
    }

    /**
     * @param $p_obj_wrapper_db
     */
    public function set_wrapper_user_db($p_obj_wrapper_db)
    {
        $this->c_obj_wrapper_user_db = $p_obj_wrapper_db;
    }

    /**
     * @param $p_obj_db_handle
     */
    public function set_db_handle($p_obj_db_handle)
    {
        $this->c_obj_db_handle = $p_obj_db_handle;
    }

    /**
     * @param $p_obj_sql_queries
     */
    public function set_sql_queries($p_obj_sql_queries)
    {
        $this->c_obj_sql_queries = $p_obj_sql_queries;
    }

    /**
     *
     */
    public function store_data()
    {
        $this->c_arr_storage_result['database'] = $this->store_data_in_database();
    }

    /**
     * @return null
     */
    public function get_storage_result()
    {
        return $this->c_arr_storage_result;
    }

    /**
     * @return bool
     */
    public function store_data_in_database()
    {
        $m_store_result = false;

        $this->c_obj_wrapper_user_db->set_db_handle($this->c_obj_db_handle);
        $this->c_obj_wrapper_user_db->set_sql_queries($this->c_obj_sql_queries);

        $m_store_result = $this->c_obj_wrapper_user_db->create_user_var($this->c_username, $this->c_password, $this->c_name, $this->c_surname);

        return $m_store_result;
    }
}
  