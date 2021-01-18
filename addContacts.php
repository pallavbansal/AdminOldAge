<?php
include('DB.php');
$emailId='';
$firstName=$_GET['firstName'];
$lastName=$_GET['lastName'];
if(!empty($_GET['emailId'])){
$emailId=$_GET['emailId'];
}
$phone=$_GET['phone'];
$skypeId=$_GET['skypeId'];


$query = "insert into contacts (firstName,lastName,emailId,phoneNumber,skypeId) values ('$firstName','$lastName','$emailId','$phone','$skypeId') ";
$db = new DB();
$res = $db -> InsertWithQuery($query);
echo json_encode($res);
?> 

