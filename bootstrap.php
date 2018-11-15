<?php 

App::bind('config',require "config.php");


App::bind('database',new query (
connect::make(App::get('config')['database'])

));
?>