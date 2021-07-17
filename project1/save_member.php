<?php 

require('pp.php');
require('AfricasTalkingGateway.php');


$pName = $_POST['person_name'];

$pNumber = $_POST['phone_number'];

$email_address = $_POST['email_address'];

$password = md5($_POST['password']);

$confirm_password = md5($_POST['password']);

$district = $_POST['district_id'];

if($password != $confirm_password){
 echo "passwords do not match";
 exit();}

$string = $sql_connection->query("INSERT INTO members(NAME,EMAIL,PHONE_NUMBER,PASSWORD,DISTRICTS_ID)VALUES('$pName','$email_address','$pNumber','$password','$district')");
 

$message = "Hello ".$pName."Thank you for visitng our site we appreciate the time you have spent with us, we will be informing you of any updates...Thanks > Mgt...";

$username = "sandbox";

$apikey = "3f32e87bdff94bbacc97b1c20fa138d2ed457ba2c571da209725370ac71489e2";

$recepients = "+256786421181 "; // or$pNumber

$gateway = new AfricasTalkingGateway($username,$apikey,"sandbox");

$gateway->sendMessage($recepients, $message);

header("Location:users.php");


 

