<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "mantan" && $password =="0123"){
	$_SESSION["username"] = $username;
	header("Location: index.php");
}else{
	echo"Login tidak berhasil";
}
?>