<?php

define('ROOT_PATH', dirname(__DIR__));

set_include_path(
  ROOT_PATH . '\\client\\pages'
  . PATH_SEPARATOR .
  ROOT_PATH . '\\client\\common'
);

$parsed_uri = parse_url($_SERVER['REQUEST_URI']);

$request_path = $parsed_uri["path"];

switch ($request_path) {

case '' :
case '/' :
  require 'main/main.php';
  break;

case '/about' :
  require 'about/about.php';
  break;

case '/quiz':
  if(isset($parsed_uri["query"]))
  {
    require 'quiz/quiz.php';
  }
  else
  {
    http_response_code(404);
    require '404/404.php';
  }
  break;

case '/quiz/create':
  require 'quiz/create/quiz_create.php';
  break;

case '/quiz/all':
  require 'process-from.php';
  break;

default:
  http_response_code(404);
  require '404/404.php';
  break;

}

?>
