<<?php 
require('nema.php');

 if(!isset($_POST['tree_type_name'])){
 	echo "Name is not set";
 	exit();
 }

$t_name = $_POST['tree_type_name'];

$sql_connection->query("INSERT INTO tree_types(TYPE_NAME)VALUES('$t_name')");

header("Location:tree_types.php");

 