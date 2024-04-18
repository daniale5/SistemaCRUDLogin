<?php

$id = $_GET['id'];

// echo $id;

include_once("conect.php"); 

include_once("Crud.php"); 

$obj = new Crud($conect);

$obj->delete($id);

?>