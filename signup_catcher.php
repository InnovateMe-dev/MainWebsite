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

	if(!$row = mysql_fetch_array($query) or die("Error3: That username is already registered, please press the browser's back button and choose a different username." . mysql_error()))
	{
		NewUser();
	}
	else
	{
		echo "That username is already registered, please press the browser's back button and choose a different username.";
	}
}

function NewUser()
{

	$firstname = $_POST['firstname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$lastname = $_POST['lastname'];
	$personal_statement = $_POST['personal_statement']; //escape the html characters later
	$profession = $_POST['profession'];
	$education = $_POST['education'];

	$query = "INSERT INTO users (username,password,email,first_name,last_name,profession,education,personal_statement) VALUES ('$username','$password','$email','$firstname','$lastname','$profession','$education','$personal_statement')";
	$data = mysql_query($query)or die("Error: " . mysql_error());
	if($data)
	{
	//echo "YOUR REGISTRATION IS COMPLETED...";
	header ("Location: profile.php");
	}
}

function CatchPost() {

    





}

?>