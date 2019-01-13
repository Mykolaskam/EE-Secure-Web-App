<?php

// Register component on container
/**
 * @param $container
 * @return \Slim\Views\Twig
 */
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

/**
 * @param $container
 * @return Validator
 */
$container['validator'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'Validator.php';
    $validator = new Validator();
    return $validator;
};

/**
 * @param $container
 * @return SessionModel
 */
$container['session_model'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SessionModel.php';
    $session_model = new SessionModel();
    return $session_model;
};

/**
 * @param $container
 * @return BcryptWrapper
 */
$container['bcrypt_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'BcryptWrapper.php';
    $bcrypt_wrapper = new BcryptWrapper();
    return $bcrypt_wrapper;
};

/**
 * @param $container
 * @return LibSodiumWrapper
 */
$container['libsodium_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'LibSodiumWrapper.php';
    $wrapper = new LibSodiumWrapper();
    return $wrapper;
};

/**
 * @param $container
 * @return Base64Wrapper
 */
$container['base64_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'Base64Wrapper.php';
    $wrapper = new Base64Wrapper();
    return $wrapper;
};

/**
 * @param $container
 * @return UserModel
 */
$container['user_model'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'UserModel.php';
    $user_model = new UserModel();
    return $user_model;
};

/**
 * @param $container
 * @return SQLWrapper
 */
$container['sql_wrapper'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SQLWrapper.php';
    $mysql_wrapper = new SQLWrapper();
    return $mysql_wrapper;
};

/**
 * @param $container
 * @return SQLQueries
 */
$container['sql_queries'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SQLQueries.php';
    $sql_queries = new SQLQueries();
    return $sql_queries;
};

/**
 * @param $container
 * @return SQLModel
 */
$container['sql_model'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'SQLModel.php';
    $sql_model = new SQLModel();
    return $sql_model;
};

/**
 * @param $container
 * @return null|PDO
 */
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
    try {
        $obj_pdo = new PDO($host_details, $user_name, $user_password, $pdo_attributes);
    } catch (PDOException $exception_object) {
        trigger_error('error connecting to  database');
    }
    return $obj_pdo;
};

/**
 * @param $container
 * @return clientModel
 */
$container['soapmodel'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'clientModel.php';
    $model = new clientModel();
    return $model;
};

/**
 * @param $container
 * @return XmlParser
 */
$container['xmlmodel'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'XmlParser.php';
    $model = new XmlParser();
    return $model;
};

/**
 * @param $container
 * @return messageModel
 */
$container['msgmodel'] = function ($container) {
    $class_path = $container->get('settings')['class_path'];
    require $class_path . 'messageModel.php';
    $model = new messageModel();
    return $model;
};

