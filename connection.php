<?php 
$conn=mysqli_connect("localhost","root","");
if(!$conn){
	die('database connection failed'.mysqli_error());
}
$db_selected=mysqli_select_db($conn,"hearing_disorders");
if(!$db_selected){
	die("can't use hearing disorders DB:".mysqli_error());
}
?>