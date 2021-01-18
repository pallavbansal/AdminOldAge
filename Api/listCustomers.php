<?php
include('../DB.php');

$ar = array();

$query = "SELECT * FROM users INNER JOIN contacts ON users.contactId=contacts.id";
$db = new DB();
$res = $db -> SelectWithQuery($query);

header("Content-type:application/json"); 
echo json_encode($res);
?> 

