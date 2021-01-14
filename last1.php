<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";
$conn = new mysqli($servername, $username, $password, $dbname);


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{ 
 echo '<div class="menu">';
	echo '<a href="#" class="brand"><img src="logo.jpg"></a>';
	echo '<nav>';
		echo '<ul>';
		    echo '<li><a href="http://localhost/update.html">UPDATE</a></li>';
			echo '<li><a href="http://localhost/cancel.html">CANCEL</a></li>';
			echo '<li><a href="http://localhost/home.html">HOME</a></li>';
			echo '<li><a href="http://localhost/ind.php">LOG OUT</a>';			
			echo '</li>';	
		echo '</ul>';
	echo '</nav>';
echo '</div>';
 echo '<div class="loginBox">';
 $sql = "SELECT * from passenger p1 where p1.pid=(select max(p2.pid) from passenger p2)";
 $result = $conn->query($sql);
 if($result->num_rows>0)
 {
	 while($row=$result->fetch_assoc())
	 {
		 echo '<div class="loginBox">';
		
     $a=$row["pid"];
	 $b=$row["pname"];
	 echo '</br> </br>';
	 echo '<h style="font-size:30px; color:white; ">Your Tickets have been booked</h>';
	  echo '</br> </br> </br>';
     echo '<h style="font-size:30px; color:white;">The passenger ID of '.$b.' is '.$a.'</h>';
}

 } 
  $sql1 = "SELECT * from passenger p1 where p1.pid=(select max(p2.pid)-1 from passenger p2)";
 $result1 = $conn->query($sql1);
 if($result1->num_rows>0)
 {
	 while($row1=$result1->fetch_assoc())
	 {
		 
		
     $c=$row1["pid"];
	 $d=$row1["pname"];
	 echo '</br> </br>';
	 
	 
     echo '<h style="font-size:30px; color:white;">The passenger ID of '.$d.' is '.$c.'</h>';
}

 } 
 }
echo '</div>';
?>
<html>
<head>
<style>

body
{
	margin: 0;
	padding: 0;
	background: url(a.jpg);
	
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
.loginBox
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 580px;
	height: 290px;
	padding: 50px 40px;
	box-sizing: border-box;
	background: rgba(0,0,0,.5);
}
<style>
</head>
<body>

	
</body>
</html>
