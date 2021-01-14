<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";
$conn = new mysqli($servername, $username, $password, $dbname);

 if(isset($_POST['email'], $_POST['pwd']))
{
 $email = $_POST['email'];
 $password = $_POST['pwd'];
 $a= base64_encode($password);
 $sql = "select email from user where email like '".$email."' and password like '".$a."';";
 
 $result=mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result)>0)
  {
      $_SESSION['signin']=true;
header('Location: home.html');
  }
else{
    echo " INVALID USER OR INCORRECT PASSWORD";
}
    
}
else
{
}
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
.loginBox
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 350px;
	height: 420px;
	padding: 80px 40px;
	box-sizing: border-box;
	background: rgba(0,0,0,.5);
}
.user
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(-100px/2);
	left: calc(50% - 50px);
}
h2
{
	margin: 0;
	padding: 0 0 20px;
	color: #efed40;
	text-align: center;
}
.loginBox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}
.loginBox input
{
	width: 100%;
	margin-bottom: 20px;
}
.loginBox input[type="text"],
.loginBox input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;56hy   h hyh aq5
	font-size: 16px;
}
::placeholder
{
	color: rgba(255,255,255,.5);
}
center
{
font-size:30px;
padding-top: 65px;
color:red;

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
</style>
</head>
<body>
<center><p1>INDIAN RAILWAYS</p1></center>
<div class="loginBox">
	<form action="login.php" method="post">
		<p>Email</p>
		<input type="text" name="email" placeholder="Enter Email">
		<p>Password</p>
		<input type="password" name="pwd" placeholder="••••••">
		<input type="submit" name="" value="Sign In">
		<a href="signup.php">Don't have an account?</a>
	</form>
</div>
</body>
</html>
