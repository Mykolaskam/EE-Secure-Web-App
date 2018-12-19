<?php

define('DIRSEP', DIRECTORY_SEPARATOR);

ini_set('display_errors', 'On');
ini_set('html_errors', 'On');
ini_set('xdebug.trace_output_name', 'SecureWebApp.%t');

$settings = [
  "settings" => [
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
    'mode' => 'development',
    'debug' => true,
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
          'user_name' => 'admin',
          'user_password' => 'admin',
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
