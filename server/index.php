<?php

define('ROOT_PATH', dirname(__DIR__));

set_include_path(
  ROOT_PATH . '\\client\\pages'
  . PATH_SEPARATOR .
  ROOT_PATH . '\\client\\common'
);

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

case '' :
case '/' :
  require 'main/main.php';
  break;

case '/about' :
  require 'about/about.php';
  break;

case '/process-form.php';
  require 'process-from.php';
  break;

default:
  http_response_code(404);
  require '404/404.php';
  break;

}

?>
