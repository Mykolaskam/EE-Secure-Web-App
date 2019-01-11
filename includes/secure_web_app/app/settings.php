<?php

define('DIRSEP', DIRECTORY_SEPARATOR);
define ('BCRYPT_ALGO', PASSWORD_DEFAULT);
define ('BCRYPT_COST', 12);

$url_root = $_SERVER['SCRIPT_NAME'];
$url_root = implode('/', explode('/', $url_root, -1));
$css_path = $url_root . '/css/style.css';
define('CSS_PATH', $css_path);

ini_set('display_errors', 'On');
ini_set('html_errors', 'On');
ini_set('xdebug.trace_output_name', 'SecureWebApp.%t');

$m2muser = '18vtailor';
$m2mpass = 'L3tm31n123';
$wsdl = 'https://m2mconnect.ee.co.uk/orange-soap/services/MessageServiceByCountry?wsdl';
define('WSDL', $wsdl);
define('M2MUSER', $m2muser);
define('M2MPASS', $m2mpass);
$settings = [
  "settings" => [
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
    'mode' => 'development',
    'debug' => true,
      'class_path' => __DIR__ . '/src/',
    'view' => [
      'template_path' => __DIR__ . '/templates/',
      'twig' => [
	'cache' => __DIR__ . '/cache/twig',
        'auto_reload' => true
      ]
    ],
      'pdo' => [
          'rdbms' => 'mysql',
          'host' => 'localhost',
          'db_name' => 'secure_db',
          'port' => '8888',
          'user_name' => 'secure',
          'user_password' => '',
          'charset' => 'utf8',
          'collation' => 'utf8_unicode_ci',
          'options' => [
              PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              PDO::ATTR_EMULATE_PREPARES   => true,
          ],
      ]
  ],
];

return $settings;
