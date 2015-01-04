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
    <title><?php echo "$firstname $lastname"; ?></title>
    
    <link rel="shortcut icon" href="./img/icon.ico">
    <link rel="stylesheet" href="profiletest.php" media="screen">
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:bold" rel="stylesheet" type="text/css">
    
    <script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'en'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl(
      '008542627573812080491:6fjizbozdlu');

    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.enableSearchboxOnly("http://www.google.com/cse?cx=007892779704213323984:cmsvc6a4st8", null, true);
    customSearchControl.draw('cse-search-form', options);
  }, true);
</script>
<link rel="stylesheet" href="search.css" type="text/css" />
       
        
</head>

<body>
<div id="container">
    <header>
        <a href="index.html"><img src="logolong.png" alt="InnovateMe" class="logosize" ></a>
        
        <div id="search">
            <div id="cse-search-form" style="width: 100%;">Loading</div>
        </div>
        
         <nav class="header-nav">
	<ul>
		<li><a href="index.html"><img src="./img/icon1.png" title="Home"></a></li> <!--home-->
                
		<li><a href="#"><img src="./img/icon3.png" title="Workspace"></a> <!--workspace-->
			<ul>
				<li><a href="#">Browser IDE</a></li>
				<li><a href="#">Mind Mapping</a></li>
				<li><a href="#">Collaboration</a>
					<ul>
						<li><a href="#">Notes</a></li>
						<li><a href="#">Videochat</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#"><img src="./img/icon2.png" title="Projects"></a> <!-- projects -->
			<ul>
				<li><a href="#">Commits</a></li>
				<li><a href="#">Teams</a></li>
                                <li><a href="#">Tasks</a></li>
			</ul>
		</li>
		<li><a href="#"><img src="./img/icon4.png" title="Network"></a></li> <!--networking -->
	</ul>
</nav>
        
        
    </header>

    <div id="banner">
        <div id="profile-picture">

           <img src="defaultprofilepic.gif" />
           
           
           
        </div>
        
        <div id="name-holder">
            <?php echo "$firstname $lastname"; ?>
           </div>
    </div>
    
    <div id="container-main">
        <aside id="left-column">
            Project 1<br>
            
            <select>
                <option value="Project1">Project 1</option>
                <option value="Project2">Project 2</option>
                <option value="Project3">Project 3</option>
                <option value="Project4">Project 4</option>
            </select>
            <br>About Me<br>
	    <?php echo "$about"?>
            
        </aside>
        
        <section>
            <nav>
             <div id="navbar"> 
                 <ul> 
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Network</a></li> 
                    <li><a href="#">Projects</a></li> 
                    <li><a href="#">Teams</a></li> 
                    
                    
                 </ul>
             </div>
            </nav>
         
            <article>
                <?php echo "Email: $email <br>City: $city<br>Profession: $profession<br>Education: $education<br>";?>
		<?php echo "$myusername $mypassword";?>
            </article>     
        </section>
               
        
    </div>
    
    
    
<footer>
           <div id="site-footer">
            (c) 2014 InnovateMe Inc. All rights reserved.
            
           </div>
</footer> 
    
</div>

</body>
</html>