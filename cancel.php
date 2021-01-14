<html>
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
</style>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['name'], $_POST['pid']))
{
 $name = $_POST['name'];
 $pid = $_POST['pid'];
echo '<div class="menu">';
	echo '<a href="#" class="brand"><img src="logo.jpg"></a>';
	echo '<nav>';
		echo '<ul>';
			echo '<li><a href="http://localhost/home.html">HOME</a></li>';
			echo '<li><a href="http://localhost/ind.php">LOG OUT</a>';
				
			echo '</li>';
			
			
		echo '</ul>';
	echo '</nav>';
echo '</div>';
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
 $sql = "delete from passenger where pid=$pid";
 $sql1 = "delete from payment where pid=$pid";
 echo '</br> </br> </br></br> </br>';
if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)){
	echo '</br> </br> </br> </br>';
	echo '<h style="font-size:30px; position: absolute; left:450px; color:white; ">Your Ticket has been cancelled</h>';
	
 }
 else{
	 echo '</br> </br> </br> </br>';
	echo '<h style="font-size:30px; position: absolute; left:450px; color:white; ">Your Ticket cannot be cancelled</h>';
 }
}

}
?>
