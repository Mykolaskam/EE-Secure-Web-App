<?php
/**
 * SessionModel.php
 *
 * stores the validated values in the relevant storage location
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

class SessionModel
{
    /**
     * @var null
     */
    private $c_username;
    /**
     * @var null
     */
    private $c_arr_storage_result;
    /**
     * @var null
     */
    private $c_obj_wrapper_session_db;
    /**
     * @var null
     */
    private $c_obj_db_handle;
    /**
     * @var null
     */
    private $c_obj_sql_queries;

    /**
     * SessionModel constructor.
     */
    public function __construct()
    {
        $this->c_username = null;
        $this->c_arr_storage_result = null;
        $this->c_obj_wrapper_session_db = null;
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
     */
    public function set_session_values($p_username)
    {
        $this->c_username = $p_username;
    }


    /**
     * @param $p_obj_wrapper_db
     */
    public function set_wrapper_session_db($p_obj_wrapper_db)
    {
        $this->c_obj_wrapper_session_db = $p_obj_wrapper_db;
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

        $this->c_obj_wrapper_session_db->set_db_handle($this->c_obj_db_handle);
        $this->c_obj_wrapper_session_db->set_sql_queries($this->c_obj_sql_queries);

        $m_store_result = $this->c_obj_wrapper_session_db->store_session_var('user_name', $this->c_username);

        return $m_store_result;
    }
}
