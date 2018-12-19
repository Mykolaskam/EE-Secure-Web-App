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
      ],
    ],
  ]
];

return $settings;
