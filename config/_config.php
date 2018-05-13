<?php

//echo '<pre>'; print_r($_SERVER); exit;

$root = $_SERVER['DOCUMENT_ROOT']; // /home/desisitcdm/jean-forteroche
$host = $_SERVER['HTTP_HOST']; // jean-forteroche.deborah-maitrejean.com
$uri = $_SERVER['REQUEST_URI']; // /

// define contantes
define('ROOT', $root . '/');
define('HOST', 'https://' . $host . '/');

define('VIEW', ROOT . 'view/');
define('ASSETS', HOST . 'public/');