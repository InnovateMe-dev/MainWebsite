<?php
session_start();
if (!(isset($_SESSION['myusername']) && $_SESSION['myusername'] != '') && !(isset($_SESSION['mypassword']) && $_SESSION['mypassword'] != '')) {
header ("Location: login.php");
}
?>
<html>
<body>
Login Successful
<?php
sleep(3);
header("location:profile.php");
?>
</body>
</html>





