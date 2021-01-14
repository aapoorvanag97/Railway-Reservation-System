<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['name'], $_POST['pwd']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $pasword = $_POST['pwd'];
 $aid = $_POST['aid'];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
 $sql = "select email from user where email like '".$email."';";
 
 $result=mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result)>0)
  {
      echo "email id already present";
  }
  else
  {
    // echo "Connection Successful";
	 $a= base64_encode($pasword);
     $sql = "INSERT INTO user(name, email, password, adhar)
     VALUES ('$name', '$email', '$a', '$aid')";
if(mysqli_query($conn, $sql)){
    //echo "Records inserted successfully.";
   header('Location: home.html');
} else{
    echo "YOU HAVE ENTERED INCORRECT DETAILS.";
}
}
 }
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
	height: 480px;
	padding: 50px 40px;
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
padding-top: 35px;
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
	<form action="signup.php" method="post">
	    <p>Name</p>
		<input type="text" name="name" placeholder="Enter Name">
		<p>Aadhar Number</p>
		<input type="text" name="aid" placeholder="Enter Aadhar Number">
		<p>Email</p>
		<input type="text" name="email" placeholder="Enter Email">
		<p>Password</p>
		<input type="password" name="pwd" placeholder="••••••">
		<input type="submit" name="" value="Sign In">
		<a href="login.php">Already have an account?</a>
	</form>
</div>
</body>
</html>