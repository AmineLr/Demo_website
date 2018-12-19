<?php

ini_set('display_errors','on');
error_reporting(E_ALL);


$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];


define('ROOT', $root.'/Blog/');
define('HOST', $host.'/Blog/');

define ('CONTROLLER', ROOT.'controller/');
define ('VIEW', ROOT.'view/');
define ('MODEL', ROOT.'model/');
define ('CLASSES', ROOT.'classes/');

/* define ('ASSETS', HOST.'assets/');*/ 















?>