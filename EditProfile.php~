<?php

session_start();
if (!(isset($_SESSION['myusername']) && $_SESSION['myusername'] != '') && !(isset($_SESSION['mypassword']) && $_SESSION['mypassword'] != '')) {
header ("Location: login.php");
}

$myusername = $_SESSION['myusername'];
$mypassword = $_SESSION['mypassword'];
$userid = $_SESSION['userid'];
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="79512499"; // Mysql password
$db_name="innovateme"; // Database name
$tbl_name="userprofile"; // Table name



	
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");

	
	$userid = $_SESSION['userid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$about = $_POST['about'];
	$profession = $_POST['profession'];
	$education = $_POST['education'];	
	
	
	$query = "UPDATE userprofile SET firstname = '$firstname', lastname = '$lastname', email = '$email', city = '$city', about = '$about', profession = '$profession', education = '$education' WHERE userid = '$userid'";
	$data = mysql_query($query)or die(mysql_error());
	
	
	if($data){
		
		header("location:profile.php");
	}




?>

