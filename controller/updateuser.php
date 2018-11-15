<?php

$id=$_GET['id'];
$name= $_POST['name'];
$username= $_POST['username'];
$email= $_POST['email'];
$status= $_POST['status'];
App::get('database')->update('users',$name,$username,$email,$status,$id);
header("Location: /manageuser");
 ?>