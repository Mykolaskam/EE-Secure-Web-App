<?php


class SessionModel
{
    private $c_username;
    private $c_password;
    private $c_arr_storage_result;
    private $c_obj_wrapper_session_file;
    private $c_obj_wrapper_session_db;
    private $c_obj_db_handle;
    private $c_obj_sql_queries;

    public function __construct()
    {
        $this->c_username = null;
        $this->c_password = null;
        $this->c_arr_storage_result = null;
        $this->c_obj_wrapper_session_file = null;
        $this->c_obj_wrapper_session_db = null;
        $this->c_obj_db_handle = null;
        $this->c_obj_sql_queries = null;
    }

    public function __destruct()
    {
    }


}