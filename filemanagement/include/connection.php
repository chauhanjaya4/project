<?php 
$conn = mysqli_connect("localhost","root","","filemanagement");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>