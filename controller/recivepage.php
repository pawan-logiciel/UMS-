<?php 
$id=$_GET['id'];
$result=App::get('database')->selectbyid('pages',$id);
 $data=$result->fetchAll();
 foreach ($data as $value) {
 	$title=$value['title'];
 	$metakey=$value['metakeyword'];
 	$metadesc=$value['metadesc'];
 	$desc=$value['description'];
 	$status=$value['status'];
}
require "include/header.php";
require "include/side-head.php";
require 'views/updatepage.view.php';
require "include/footer.php";

 ?>