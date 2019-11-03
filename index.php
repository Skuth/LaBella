<?php

session_start();

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$config['displayErrorDetails'] = true;

$app = new \Slim\App(['settings' => $config]);

require_once("routes/site.php");
require_once("routes/admin.php");

$app->run();

?>