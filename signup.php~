<?php
ini_set('display_errors', 'on');

define('DB_HOST', 'localhost');
define('DB_NAME', 'innovateme');
define('DB_USER','root');
define('DB_PASSWORD','79512499');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME) or die("Failed to connect to MySQL DB: " . mysql_error());


if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'") or die("Error2: " . mysql_error());
	
	if(!$row = mysql_fetch_array($query) or die("Error3: " . mysql_error()))
	{
		NewUser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}

function NewUser()
{

	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$query = "INSERT INTO users (username,name,email,password) VALUES ('$username','$name','$email','$password')";
	$data = mysql_query($query)or die("Error: " . mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
	}


	



?>