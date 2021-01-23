<?php
$db=new mysqli('localhost','root','');
mysqli_select_db($db,'studywars');
if($db->connect_error){
	$error = $db->connect_error;
	}

$db->set_charset('utf8');
?>
