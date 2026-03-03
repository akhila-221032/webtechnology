<?php 
$conn = mysqli_connect("localhost" , "root" ,"akhila@2007" , "userdb");

if(!$conn){
	die("database connection failed");
}

echo "database connected successfully";

?>