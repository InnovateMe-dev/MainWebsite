<?php
session_start();
session_destroy();
header ("Location: index.php");
?>
<html>
<body>
Logout Successful
<br><br>
<a href="index.html">Home</a><br>
<a href="login.php">Login</a>
</body>
</html>