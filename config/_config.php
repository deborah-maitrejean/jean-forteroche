<?php

//echo '<pre>'; print_r($_SERVER); exit;

$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];

define('ROOT', $root . '/jean-forteroche/');
define('HOST', 'http://' . $host . '/jean-forteroche/');
define('VIEW', ROOT . 'view/');
define('ASSETS', HOST . 'public/');

/*----- DATABASE -----*/
define('DB_HOST', 'localhost');
define('DB_NAME', 'blogjeanforteroche');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '');
define('DB_PORT', 80);