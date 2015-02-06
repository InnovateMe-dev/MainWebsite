<?php

session_start();
if (!(isset($_SESSION['myusername']) && $_SESSION['myusername'] != '') && !(isset($_SESSION['mypassword']) && $_SESSION['mypassword'] != '')) {
header ("Location: login.php");
}

$myusername = $_SESSION['myusername'];
$mypassword = $_SESSION['mypassword'];
$user_id = $_SESSION['user_id'];
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="79512499"; // Mysql password
$db_name="innovateme"; // Database name
$tbl_name="Friends"; // Table name
$tbl_name2 = "users";
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE user_id IN ($user_id);";
$result=mysql_query($sql);

$friendArray = array();
$friend_idArray = array();

while($row = mysql_fetch_array($result)) {
    $summary = $row['friend_id'];
    $friend_idArray[] = $summary;
    //echo $summary;
}

//echo $friend_idArray[0];

$x = 0;
while($x <= sizeof($friend_idArray)) {
$user_idArrayVar = $friend_idArray[$x];
$sql2="SELECT * FROM $tbl_name2 WHERE user_id IN ($user_idArrayVar);";
$result2=mysql_query($sql2);
$row2 = mysql_fetch_array($result2);
    $summary2 = $row2['first_name'];
  echo '<a href="profiles.php?user_id='.$user_idArrayVar.'>' . $summary2 . '</a><br>';
  $x = $x + 1;
//print_r($summary2);
}

?>