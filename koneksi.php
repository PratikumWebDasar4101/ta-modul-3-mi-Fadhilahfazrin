<?php

$server="localhost";
$user="root";
$password="";
$db_name="db_form";

$conn = mysql_connect($server,$user,$password);
$db_select = mysql_select_db($db_name, $conn);

if(!$conn){
	echo "Error:" . mysql_connect_error();
	exit();
}else{
	echo 'connected to database';
}






?>