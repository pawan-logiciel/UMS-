<?php
 

App::get('database')->insert('pages',[

	'title'=>$_POST['title'],
	'metakeyword'=>$_POST['metakey'],
	'metadesc'=>$_POST['metadesc'],
	'description'=>$_POST['desc'],
	'status'=>1

]);
require "include/header.php";
require "include/side-head.php";
require 'views/add-page.view.php';
require "include/footer.php";
 ?>