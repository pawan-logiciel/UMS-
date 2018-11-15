<?php 
$email=$_GET['name'];
App::get('database')->update('users',$email,[
	'isverified'=>"approved"
]);
require 'include/header.php';

require 'views/activate.view.php';

require 'include/footer.php';
?>