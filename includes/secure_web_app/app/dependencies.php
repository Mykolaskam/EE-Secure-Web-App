<?php

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(
        $container['settings']['view']['template_path'],
        $container['settings']['view']['twig']
    );

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    return $view;
};

$container['validator'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'Validator.php';
    $validator = new Validator();
    return $validator;
};

$container['session_model'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SessionModel.php';
    $session_model = new SessionModel();
    return $session_model;
};

$container['session_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SessionWrapper.php';
    $session_wrapper = new SessionWrapper();
    return $session_wrapper;
};

$container['bcrypt_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'BcryptWrapper.php';
    $bcrypt_wrapper = new BcryptWrapper();
    return $bcrypt_wrapper;
};

$container['user_model'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'UserModel.php';
    $user_model = new UserModel();
    return $user_model;
};

$container['sql_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SQLWrapper.php';
    $mysql_wrapper = new SQLWrapper();
    return $mysql_wrapper;
};

$container['sql_queries'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SQLQueries.php';
    $sql_queries = new SQLQueries();
    return $sql_queries;
};

$container['sql_model'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SQLModel.php';
    $sql_model = new SQLModel();
    return $sql_model;
};

$container['dbase'] = function ($container) {

    $db_conf = $container['settings']['pdo'];
    $host_name = $db_conf['rdbms'] . ':host=' . $db_conf['host'];
    $port_number = ';port=' . '3306';
    $user_database = ';dbname=' . $db_conf['db_name'];
    $host_details = $host_name . $port_number . $user_database;
    $user_name = $db_conf['user_name'];
    $user_password = $db_conf['user_password'];
    $pdo_attributes = $db_conf['options'];
    $obj_pdo = null;
    try
    {
        $obj_pdo = new PDO($host_details, $user_name, $user_password, $pdo_attributes);
    }
    catch (PDOException $exception_object)
    {
        trigger_error('error connecting to  database');
    }
    return $obj_pdo;
};

$container['msgmodel'] = function ($container){
    $class_path = $container ->get('settings')['class_path'];
    require $class_path . 'clientModel.php';
    $model = new clientModel();
    return $model;
};


