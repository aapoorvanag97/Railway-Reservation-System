

<html>
<style>

html
{
	top: 50%;
	left: 50%;
	width: 100%;
	height: 100vh;
	background: url(g4.jpg);
	filter: alpha(opacity=50);
	background-repeat: no-repeat;
  background-attachment: fixed;  
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
.loginBox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: red;
}
.loginBox input
{
	width: 100%;
	margin-bottom: 20px;
}
::placeholder,
.loginBox input[type="text"],
.loginBox input[type="password"],
.loginBox input[type="date"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: white;
	outline: none;
	height: 40px;
	color:black;
	font-size: 16px;
}
select
{
	color:black;
	border: none;
	border-bottom: 1px solid #fff;
	background: white;
	outline: none;
	height: 40px;
	width: 100%;
	
	font-size: 16px;
}
::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: black;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: black;
}
center
{
font-size:30px;
padding-top: 35px;
color:red;

}
input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: #ff267e;
	cursor: pointer;
	border-radius: 20px;
	width:20%;
	position: absolute;
	margin-left: -470px;
	margin-top: 120px;
}

.loginBox a
{
	color:white;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  color:white;
}

/* Float four columns side by side */
.column {
	color:red;
  float: left;
  width: 100%;
  padding: 0 6px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 350px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 800px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
	 
	color:white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: transparent;
  
  box-shadow: 10px -10px 5px blue;
  box-shadow: 5px 10px 18px blue;
  
  left: 50%;
	
}

</style>

<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['name1'], $_POST['gender1']))
{
 
 $name1 = $_POST['name1'];
 $gender1 = $_POST['gender1'];
 $dob1 = $_POST['dob1'];
 $add1 = $_POST['add1'];
 $card = $_POST['card'];
 $date = $_POST['date'];
 $cvv = $_POST['cvv'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{ 
 if( isset($_COOKIE["name"]))
 {
            $tid= $_COOKIE["name"];
 }
$sql = "INSERT INTO passenger(pname, dob, gender, address, tid)
     VALUES ('$name1', '$dob1', '$gender1', '$add1', '$tid')";
$sql1 = "INSERT INTO payment(expdate, cardno, cvv, tid)
     VALUES ('$date', '$card', '$cvv', '$tid')";
	 
if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)){
	header("Location:http://localhost/last.php");
 
} else{
    echo "YOU HAVE ENTERED INCORRECT DETAILS.";
}
}
  
}
else
{
}
?>
<body>

<div class="menu">
	<a href="#" class="brand"><img src="logo.jpg"></a>
	<nav>
		<ul>
			<li><a href="http://localhost/home.html">Home</a></li>
			<li><a href="http://localhost/ind.php">About</a>
				
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
<div class="row">
  <div class="column">
    <div class="card">
	<div class="loginBox">
	<form action="book1.php" method="post">
  
  <p1 style="color:white; font-size:20px;">Enter Name of Passenger1</p1>
  <input type="text" name="name1" placeholder="Name">
  <br>
  <p1 style=" font-size:20px;">Enter Gender of Passenger1</p1>
  <select name="gender1">
  </br>
  <option value="Female">Female</option>
  <option value="Male">Male</option>
  <option value="Others">Others</option>
  
</select>
</br>
  <br>
  <p1 style=" font-size:20px;">Enter Date of birth of Passenger1</p1>
  <input type="date" placeholder="Enter the number" name="dob1" required />
  
  <p1 style="font-size:20px;">Enter Address of Passenger1</p1>
  <input type="text" name="add1" placeholder="Address">
  <br>
  <p1 style="left:10px; font-size:20px;">Enter Card Details</p1>
  </br> </br>
  <p1 style=" font-size:20px;">Enter Card Number</p1>
  <input type="text" name="card" placeholder="Card Number">
  <p1 style=" font-size:20px;">Enter Expiry date in the form of (mm/yyyy)</p1>
  <input type="text" name="date" placeholder="Expiry Date">
  <p1 style=" font-size:20px;">Enter CVV</p1>
  <input type="password" name="cvv" placeholder="•••••">
  <input type="submit" value="Submit">
  <!--<input type="submit" value="Submit">-->
</form> 
</div>
    </div>
  </div>

  
  </br>
  
  
</div>
<section>
</section>
<script>

</script>
</body>
</html>

