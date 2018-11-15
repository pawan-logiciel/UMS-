<?php 
App::get('database')->matchpass($_POST['email'],$_POST['password']);
require 'include/header.php';
require 'views/index.view.php';
require 'include/footer.php';
?>
