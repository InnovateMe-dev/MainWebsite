<html>

<head>
	<title>Edit Profile </title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body id="body-color">

<header>
	<a href="index.html"><img src="logolong.png" alt="InnovateMe" class="logosize2" ></a>	
</header>

<div id="Sign-Up">
<br>
<h1>Edit Profile</h1>

<table border="0" class="center">

<tr>
	<form method="POST" action="EditProfile.php">
	<td>First Name</td><td> <input type="text" name="firstname"></td>
</tr>

<tr>
	<td>Last Name</td><td> <input type="text" name="lastname"></td>
</tr>

<tr>
	<td>Email</td><td> <input type="text" name="email"></td>
</tr>

<tr>
	<td>City</td><td> <input type="text" name="city"></td>
</tr>

<tr>
	<td>Profession</td><td> <input type="text" name="profession"></td>
</tr>

<tr>
	<td>Education</td><td> <input type="text" name="education"></td>
</tr>

<tr>
	<td>About Me</td><td> <textarea name="about" ROWS=3 COLS=24></textarea></td>
</tr>

<tr>
	<td><input id="button" type="submit" name="submit" value="Submit"></td>
</tr>

</form>

</table>

</div>
</body>
</html>


