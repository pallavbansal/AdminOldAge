<?php
include('DB.php');

$ar = array();

$query = "SELECT * FROM  contacts ";
$db = new DB();
$res = $db -> SelectWithQuery($query);

header("Content-type:application/json"); 
echo json_encode($res);
?> 

