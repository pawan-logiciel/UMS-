<?php 
    $id =$_GET['id'];
    App::get('database')->delete('users',$id);
    header("Location: /manageuser");
 ?>