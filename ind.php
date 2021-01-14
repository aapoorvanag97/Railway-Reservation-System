<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";
$conn = new mysqli($servername, $username, $password, $dbname);

?>

<html>
<head>
<style>

body
{
	margin: 0;
	padding: 0;
	background: url(c.jpeg);
	
	font-family: sans-serif;
	height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

body
{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
html
{
	top: 50%;
	left: 50%;
	width: 100%;
	height: 100vh;
	
	filter: alpha(opacity=50);
	
  background-repeat: repeat;
  background-size: cover;
}

.menu
{
	position: absolute;
	width: 100%;
	background: white;
	padding: 0 100px;
	
	box-sizing: border-box;
	border-bottom: 1px solid rgba(0,0,0,.2);
}
.menu img
{
	float: left;
	width: 84px;
}
nav
{
	position: relative;
	float: right;
}
nav ul
{
	margin: 0;
	padding: 0;
	display: flex;
}
nav ul li
{
	list-style: none;
}
nav ul li a
{
	display: block;
	text-transform: uppercase;
	font-weight: bold;
	padding: 33px 20px;
	text-decoration: none;
	color: blue;
}
nav ul li a:hover
{
	background: blue;
	color: white;
}
button[type="button"]
{
	border: none;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: blue;
	cursor: pointer;
	border-radius: 20px;
}
nav ul li ul
{
	
	display: block;
	background: rgba(255,255,255,.5);
	min-width: 250px;
	position: absolute;
	margin-top: 1px;
	box-shadow: 0 2px 5px rgba(0,0,0,.5);
	opacity: 0;
	visibility: hidden;
	transition: .5s;
	transform: translateY(40px); 
}
nav ul li:hover ul
{
	opacity: 1;
	visibility: visible;
	transform: translateY(0px);
	
}
nav ul li ul li a
{
	padding: 10px;
	
}


h2
{
	margin: 0;
	padding: 0 0 20px;
	color: #efed40;
	text-align: center;
}

::placeholder
{
	color: rgba(255,255,255,.5);
}
center
{
font-size:30px;
padding-top: 35px;
color:red;

}
.loginBox
{
	position: absolute;
	top: 60%;
	left: 20%;
	transform: translate(-50%,-50%);
	width: 450px;
	height: 480px;
	padding: 50px 40px;
	box-sizing: border-box;
	background: rgba(0,0,0,.5);
}
.loginBox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: #ff267e;
	cursor: pointer;
	border-radius: 20px;
}
.loginBox input[type="submit"]:hover
{
	background: #efed40;
	color: #262626;
}
.loginBox a
{
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}

.b {
  color: yellow;
  font-family:arial;
  font-size: 25px;
}



</style>
</head>
<body>
<div class="menu">
	<a href="#" class="brand"><img src="logo.jpg"></a>
	<nav>
		<ul>
			<li><a href="http://localhost/signup.php">REGISTER</a></li>
			<li><a href="http://localhost/login.php">LOGIN</a>
				
		 	</li>
			<li><a href="http://localhost/ind.php">HOME</a>
				
			</li>
			
		</ul>
	</nav>
 </div>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>

		<div class="loginBox">
	<form action="signup.php" method="post">
	</br>
	    <h2 style="color:#00ffff; font-size:20px;">Welcome to INDIAN RAILWAYS! NOW BOOKING DOMESTIC TRAINS HAS BEEN MADE EASIER</h2>
		
		</br>
		<p style="color:white; font-size:18px;">
Over the past few years, there has been a marked increase in the number of domestic travellers preferring trains over other modes of travel. And why not? With so many new railways introducing domestic trains to even smaller cities within India at competitive fare, there couldn't be a better time to plan your domestic travels.</p>
    
	</form>
</div>
</body>
</html>
