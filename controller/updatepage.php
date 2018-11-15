<?php

$id=$_GET['id'];
$title= $_POST['title'];
$metakey= $_POST['metakey'];
$metadesc= $_POST['metadesc'];
$desc= $_POST['desc'];
$status= $_POST['status'];
App::get('database')->updatepage('pages',$title,$metakey,$metadesc,$desc,$status,$id);
header("Location: /manage-page");
 ?>