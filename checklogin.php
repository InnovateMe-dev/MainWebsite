<?php
ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="79512499"; // Mysql password
$db_name="innovateme"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

//assign userid as session variable
$row = mysql_fetch_assoc($result);
$userid = $row['userid'];
$name = $name['name'];

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
$_SESSION['userid'] = $userid;
$_SESSION['name'] = $name;

header("location:login_success.php");
}
else {
$errorMessage = "Invalid Login";
header("location:login_fail.php");

session_start();
$_SESSION['myusername'] = '';
$_SESSION['mypassword'] = '';
}
ob_end_flush();
?>