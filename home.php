

<html>
<style>

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
	background: url(d.jpg);
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
	color: #3410C6;
}
nav ul li a:hover
{
	background: blue;
	color: white;
}
button[type="submit"]
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
.loginBox
{
	position: absolute;
	top: 60%;
	left: 25%;
	transform: translate(-50%,-50%);
	width: 600px;
	height: 420px;
	padding: 50px 40px;
	box-sizing: border-box;
	background: rgba(0,0,0,.5);
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
input[type="text"]
{
	
	color: white;
	box-sizing: border-box;
  border: 2px solid white;
	background: white;
	
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
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  margin: 0 -5px;
}

/* Remove extra left and right margins, due to padding */
.row {
float: left;
  width: 100%;
  padding: 0 10px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: left;
  background-color: white;
  color:blue;
  box-shadow: 10px -10px 5px blue;
  box-shadow: 5px 10px 18px blue;
}

.column1 {
  float: left;
  width: 25%;
  
}
.card1 {
  
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  
}
input[type=number]
{
	border: 2px solid #189AE6;
	border-radius: 5px;
	font-size:20px;
	color: #3410C6;
	text-align:center;
}
</style>

<?php
if(isset($_POST['submit']))
{
 $tid = $_POST['tid'];
 $no = $_POST['no'];

setcookie("name", $tid, time() + (86400 * 30), "/"); 
 if($no==1)
 {
	 header("Location:http://localhost/book1.php");
 }
 if($no==2)
 {
	 header("Location:http://localhost/book2.php");
 }
 if($no>=3)
 {
	 header("Location:http://localhost/book3.php");
 }
}
?>
<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['from']))
{
 $fromf1 = $_POST['from'];
 $tof1 = $_POST['to'];
 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{ 
	$sql = "SELECT * from train where train.acity='$fromf1' and train.dcity='$tof1'";
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
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	echo "</br>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
    while($row = $result->fetch_assoc()) {
		echo '<div class="column">';
		echo '<div class="card">';
		echo '<i class="fas fa-train"></i>';
		echo '<div class="zz" style="color:#3410C6;"><a href="#" class="brand"><img style="width:5%; height:5%;" src="train.png" align="left"></a></div>';
		echo '<div class="z1" style=" color:#3410C6;font-size:36px;">';
		echo  $row["tname"]." (000". $row["tid"].")</br>";
		
		
		echo '</div>';
		echo "</br>";
		
		echo '<form method="post" action="home.php">';
	    
		echo '<div class="zz11" style="color:blue; font-size:20px;">'.$row["acity"].'<h style="position:absolute; right:720px;">Arrival Time: '.$row["atime"].'</h>';   echo '<h style="position:absolute; right:415px;">No of tickets</h></div>';
		echo '<div class="zz11" style="color:#3410C6;"><img style="width:3%; height:5%;" src="arrow.png">'; echo '<input type="number" min="1" max="3" name="no" style="position:absolute; right:430px;">';
		
		//echo '<input type="number" min="1" max="3" id="no" name="tid" style="position:absolute; right:430px;">';
		
		
		//echo '<button type="button" onclick="myFunc()"  style="position:absolute; right:80px;">BOOK TICKETS</button>';
		?>
		<input type="text" name="tid" value=<?php echo $row["tid"];?>>
        <?php	
		//echo '<button type="button" name="button" style="position:absolute; right:80px;">BOOK TICKETS</button>';
	    echo '<button type="submit" name="submit" style="position:absolute; right:80px;">BOOK TICKETS</button>';
		
		
		
		
		echo '</div>';
		echo '<div class="zz11" style="color:blue; font-size:20px;">'.$row["dcity"].'<h style="position:absolute; right:700px;">Departure Time: '.$row["dtime"].'</h></div>';
		echo '</form>';
		echo "</br>";
		
		echo '</div>';
		echo '</div>';
		echo "<br>  </br>";
			
		
    }
} else {
    echo "CURRENTLY THERE ARE NO FLIGHTS THAT GOES TO THE SELECTED CITY";
}
  
}
}
else
{
}
?>

<body>
<script>
  
function myFunc(){  
var number=document.getElementById("no").value;  
//var x = document.getElementById("myVar");  

if(number==1)
{
	window.location="http://localhost/book1.php";
}  
if(number==2)
{
	window.location="http://localhost/book2.php";
}
if(number==3)
{
	window.location="http://localhost/book3.php";
}
}
</script>  

<section>
</section>
</body>
</html>

