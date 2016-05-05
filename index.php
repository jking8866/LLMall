<?php

header("Access-Control-Allow-Origin: *");

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
header("Content-Type: text/html;charset=utf-8");

define('APP_DEBUG',True);

define('BIND_MODULE', 'Home');

define('APP_PATH','./Application/');

require './ThinkPHP/ThinkPHP.php';
