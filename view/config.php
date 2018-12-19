<?php

ini_set('display_errors','on');
error_reporting(E_ALL);


$root = $_SERVER['DOCUMENT_ROOT'];
$host = $_SERVER['HTTP_HOST'];


define('ROOT', $root);
define('HOST', $host);

define ('CONTROLLER', ROOT.'controller/');
define ('VIEW', ROOT.'view/');
define ('MODEL', ROOT.'model/');

define ('ASSETS', HOST.'assets/');













?>