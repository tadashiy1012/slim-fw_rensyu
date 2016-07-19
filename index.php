<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require 'vendor/autoload.php';
$app = new \Slim\App;
$app->get('/', function(Request $req, Response $res) {
  $res->getBody()->write("Hello world!");
  return $res;
});
$app->run();