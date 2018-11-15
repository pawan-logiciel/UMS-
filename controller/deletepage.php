<?php 
    $id =$_GET['id'];
    App::get('database')->delete('pages',$id);
    header("Location: /manage-page");
 ?>