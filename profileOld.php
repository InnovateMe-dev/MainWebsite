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

/*
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
*/

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE userid='$userid'";
$result=mysql_query($sql);

$row = mysql_fetch_assoc($result);

$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$city = $row['city'];
$about = $row['about'];
$profession = $row['profession'];
$education = $row['education'];




?>

<!DOCTYPE html>
	
<html>

<head>

	<link rel="stylesheet" type="text/css" href="profile.css">
	<title><?php echo "$firstname $lastname"; ?></title>

</head>

<body>

<header>
	<a href="index.html"><img src="logolong.png" alt="InnovateMe" class="logosize" ></a>
	
	
	
</header>
<nav id="main-nav">
	<ul id="nav-ul">
		<li><a href="html_tables.asp">Tables</a></li>		
		<li><a href="html_tables.asp">Tables</a></li>
	</ul>
</nav>



<div id="main">

<div id="infopane">
<div id="info">

<img src="defaultprofilepic.gif" id="profilepic"><br>
<?php echo "$firstname $lastname <br><br> <b>Email: </b>$email <br> <b>City: </b>$city <br> <b>Profession: </b>$profession <br> <b>Education: </b>$education";?>
<p><br>

<?php echo "<b>Username: </b> $myusername ", "  <br>  ","<b>Password: </b>$mypassword<br>"; ?>

</p>

</div>
</div>


<div id="profile">
	<h1><?php echo "$firstname $lastname";?></h1>
<hr>
<br>
<p class="about">
<?php echo nl2br($about);?>

</p>

</div>
</div>


<footer>
<br><p class="center"> (c) 2014 InnovateMe Inc. All rights reserved.<br><br>
<a href="index.html">Home</a>  |  <a href="logout.php">Logout</a> | <a href="privacypolicy.html">Privacy Policy</a> | <a href="profileedit.php">Edit Profile</a></p>
</footer>






</body>

</html>
