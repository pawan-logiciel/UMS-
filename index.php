<?php 

require "vendor/autoload.php";
$query=require "bootstrap.php";

$router = new router;
require 'routes.php';


require $router->direct(request::uri(),request::method());
 ?>