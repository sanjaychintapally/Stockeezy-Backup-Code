<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "stockeez_users";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
   die('Connect Error ('. mysqli_connect_errno() .') '
   	. mysqli_connect_error()); 
}
else{
	$sql = "INSERT INTO stockeez_users (username, password)"
}
}
else{
	echo "Password needs to be filled";
	die();
  }
}
else{
	echo "Username needs to be filled";
	die();
}
?>