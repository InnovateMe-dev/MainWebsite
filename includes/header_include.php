<?php

session_start();

$myusername = $_SESSION['myusername'];
$mypassword = $_SESSION['mypassword'];
$user_id = $_SESSION['user_id'];
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="79512499"; // Mysql password
$db_name="innovateme"; // Database name
$tbl_name="users"; // Table name

/*
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
*/

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name WHERE user_id='$user_id'";
$result=mysql_query($sql);

$row = mysql_fetch_assoc($result);

$firstname = $row['first_name'];
$lastname = $row['last_name'];


?>


<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>
   


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



 <link rel="stylesheet" type="text/css" href="headerstylesheet.css">
 <header>
        <a href="index.html"><img src="logolong.png" alt="InnovateMe" class="logosize_header" ></a>
        
        <div id="search">
            <div id="cse-search-form" style="width: 100%;">Loading</div>
        </div>
        
	
					<div id="dd" class="wrapper-dropdown-5" tabindex="1">
					  <?php
						 if (empty($firstname)) {
							echo '<a href="login.php">Login</a>';	
						 } else { 
							echo "$firstname $lastname";					
					
						echo '<ul class="dropdown">';
						echo '	<li><a href="index.php"><i class="icon-home"></i>Home</a></li>';
						echo '	<li><a href="profile.php"><i class="icon-user"></i>Profile</a></li>'	;						
						echo '	<li><a href="#"><i class="icon-th-large"></i>My Network</a></li>';
						echo '	<li><a href="#"><i class="icon-cog"></i>Settings</a></li>';
						echo '	<li><a href="logout.php"><i class="icon-remove"></i>Log out</a></li>';
						echo '</ul>';
						}	   
					  ?>
					</div>
				​</div>
			
			
		
		<!-- jQuery if needed -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">

			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-5').removeClass('active');
				});

			});

		</script>


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
         
	      <!--<nav class="header-nav">
	<ul>
		<li><a href="index.php"><img src="./img/icon1.png" title="Home"></a></li> <!--home--
                
		<li><a href="#"><img src="./img/icon3.png" title="Workspace"></a> <!--workspace--
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
		<li><a href="#"><img src="./img/icon2.png" title="Projects"></a> <!-- projects --
			<ul>
				<li><a href="#">Commits</a></li>
				<li><a href="#">Teams</a></li>
                                <li><a href="#">Tasks</a></li>
			</ul>
		</li>
		<li><a href="#"><img src="./img/icon4.png" title="Network"></a></li> <!--networking --
	</ul>
</nav>
        
        -->
    </header>