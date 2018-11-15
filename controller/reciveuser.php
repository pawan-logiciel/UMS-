<?php 
$id=$_GET['id'];
$result=App::get('database')->selectbyid('users',$id);
 $data=$result->fetchAll();
 foreach ($data as $value) {
 	$name=$value['name'];
 	$username=$value['username'];
 	$email=$value['email'];
 	$status=$value['status'];
}
require "include/header.php";
require "include/side-head.php";
require 'views/updateuser.view.php';
require "include/footer.php";

 ?>