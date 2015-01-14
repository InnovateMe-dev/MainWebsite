<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");

$banner_image = '/img/header.jpg';

?>

html{
    font-family: 'Oswald', FreeSans;
    min-height:100%;
    padding: 0;
    margin: 0;
    position: relative;
    }
    
body{
    min-height:100%;
    padding: 0;
    margin: 0 0 0px;
   
    }    
    
#container {
   position: absolute;
    width: 100%;
    min-height: 100%;
    overflow: hidden;
  
}

header {
    width: 100%;
    height: 40px;
    background-color: #393939;
    color: white;
    border-bottom: solid;
    border-bottom-color: #06a8f0;
    border-bottom-width: 3px;
    
   
}



.logosize {
	height: 95%;
	width: auto;	
	position: relative;
	text-align: left;
	margin-left: 5px;
	float: left;
}

#search {
    padding: 0px;
    float: left;
    position: relative;
    margin: 5px 20px;
    display: inline;
    width: 300px;
    max-height: 40px !important;
    
}

.header-nav {
    font-family: "Myriad Set Pro",'Ubuntu', Helvetica, Arial, sans-serif;
    float: right;
    display: inline-flex;
    flex-wrap: no-wrap;
    overflow-y: visible;
  
    
}

.header-nav img {
    margin-top: 2px;
    max-height: 30px;
    max-width: auto;
}

.header-nav ul ul {
	display: none;
       
}

.header-nav ul li:hover > ul {
	display: block;
        
}

.header-nav ul {
	
	margin: 0 0;
	padding: 0px 0px;
	border-radius: 0px;  
	list-style: none;
	position: relative;
	display: inline-table;
        
       
}
.header-nav ul:after {
	content: "";
        clear: both;
        display: block;
}

.header-nav ul li {
	float: left;
}
	.header-nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		.header-nav ul li:hover a {
			color: #fff;
		}
	
	.header-nav ul li a {
                border-left: 0px solid #6b727c;
		border-right: 0px solid #575f6a;
                margin: 3px 0px 2px;
		display: block;
                padding: 0px 20px;
		color: #06a8f0;
                text-decoration: none;
                font-weight: bold;
                transition: .5s background-color;
	
                
	}
        
.header-nav ul ul {
	background: #5f6975;
        border-radius: 0px;
        padding: 0;
	position: absolute;
        top: 100%;
}
	.header-nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}
		.header-nav ul ul li a {
			padding: 8px 30px;
			color: #fff;
		}	
			.header-nav ul ul li a:hover {
				background: #4b545f;
			}


.header-nav ul ul ul {
	position: absolute; right: 100%; top:0;
}

#banner {
    background-image: url(<?php echo "$banner_image" ?>);
    background-position: center;
    background-size: 100% auto;
    background-repeat: no-repeat;
    width: 100%;
    height: 300px;
    
    border-bottom: solid;
    border-width: 5px;
    border-bottom-color: #393939;
    overflow: hidden;
}

#profile-picture {
    display:flex;
    justify-content:center;
    align-items:center;
    border: solid;
    border-color: #393939;
    border-width: 10px;
    top: 5%;
    margin-top: auto;
    margin-bottom: auto;
    background-color: white;
    width: 140px;
    height: 50%;
    position: relative;
    margin-left: auto;
    margin-right: auto;
    border-radius:15px 15px 15px 15px;
    overflow: hidden;
}

#profile-picture img {
    flex-shrink:0;
    min-width:100%;
    min-height:100%
   
}

#name-holder {
    text-align: center;
    max-width: 300px;
    min-width: 200px;
    margin-top: 30px;
    height: 1ep;
    background-color: white;
    display: block;
    color: black;
    font-size: 22pt;
    font-weight: bold;
    margin-right: auto;
    margin-left: auto;
    border-radius: 5px 5px 5px 5px;
    border: solid;
    border-color: #393939;
    border-width: 5px;
}

#container-main {
   position: fixed;
    width: 100%;
    height: 100%;
   
}

#left-column {
    display: inline;
    float: left;
    width: 20%;
    text-align: center;
    background-color: white;
    height: 100%;
    position: relative;
    padding-top: 20px;
    overflow: scroll;
}

section {
    display: block;
    float: right;
    width: 80%;
    min-width: 80%;
    background-color: transparent;
    height: 100%;
    position: relative;
}

article {
    padding: 80px 100px;
    position: relative;
    width: 100%;
    background-color: white;
    height: 100%;
    border-left: solid;
    border-color: #393939;
    border-width: 5px;
    line-height: 2em;
    font-size: 16pt;
    font-weight: bold;
    color: #393939;
    
}

nav {
    height: 20px;
    padding-bottom: 5px;
    
    
}

 #navbar ul {
        overflow-y: visible;
    	margin-top: -25px;
        margin-bottom: 20px;
	padding-top: 0px; 
	list-style-type: none; 
	text-align: center; 
	background-color: transparent;
        min-width: 1000px;
        
	} 
 
#navbar ul li {
       
        font-weight: bold;
        font-size: 12pt;
	display: inline;
        min-width: 80%;
	} 
 
#navbar ul li a {
   
        border-top: solid;
        border-left: solid;
        border-right: solid;
        border-color: #393939;
        border-width: 5px;
        border-radius: 15px 15px 0 0;
        margin-top: 0;
	text-decoration: none; 
	padding: 1em 3em; 
	color: #393939; 
	background-color: #fff;
        transition: .5s background-color;

	} 
 
#navbar ul li a:hover { 
	color: #fff; 
	background-color: #393939;
	}

footer {
    text-align: center;
    color: white;
    width: 100%;
    height: 50px;
    background-color: #393939;
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
}

#site-footer {
    padding: 1em 0;
}