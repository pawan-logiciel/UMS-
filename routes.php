<?php 


$router->get('','controller/index.php');

$router->post('login','controller/login.php');

$router->get('activate','controller/activate.php');

$router->post('add-user','controller/add-user.php');

$router->get('signup','controller/signup.php');

$router->get('homepage','controller/homepage.php');

$router->get('manageuser','controller/manageuser.php');

$router->get('deleteuser','controller/deleteuser.php');

$router->get('reciveuser','controller/reciveuser.php');

$router->post('updateuser','controller/updateuser.php');

$router->get('add-page','controller/add-page.php');

$router->post('page','controller/add-page.php');

$router->get('manage-page','controller/manage-page.php');

$router->get('deletepage','controller/deletepage.php');

$router->get('recivepage','controller/recivepage.php');

$router->post('updatepage','controller/updatepage.php');


?>