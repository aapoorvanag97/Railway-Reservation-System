<html>
<style>
body
{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
section
{
	top: 50%;
	left: 50%;
	width: 100%;
	height: 100vh;
	background: url(c.jpeg);
	
  background-repeat: no-repeat;
  background-size: cover;
}
.menu
{
	position: absolute;
	width: 100%;
	background: #000080;
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
	color: red;
}
nav ul li a:hover
{
	background: #184771;
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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<div class="menu">
	<a href="#" class="brand"><img src="logo.png"></a>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a>
				
			</li>
			<li><a href="#">Services</a>
				
			</li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">Pages</a>
				
			</li>
			<li><a href="#">Contact</a></li>
		</ul>
	</nav>
</div>

<body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script >
	    $(function () {
	        $('#datepicker').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button"
	        });
	    });
	</script>
<section>
<div class="loginBox">
	<form action="list.php" method="post">
	    <p>From</p>
		<input list="from" type="text" name="from" placeholder="Enter Arrival City">
		<datalist id="from">
    <option value="Mysore">
    <option value="Bangalore">
    <option value="Bidar">
    <option value="Gulbarga">
    <option value="Mangalore">
  </datalist>
		<p>To</p>
		<input list="to" type="text" name="to" placeholder="Enter Departure City">
		<datalist id="to">
    <option value="Mysore">
    <option value="Bangalore">
    <option value="Bidar">
    <option value="Gulbarga">
    <option value="Mangalore">
  </datalist>
		<p>Enter Date</p>
		<div class='input-group date' id='datepicker'>
		                    <input type='text' name="date" placeholder="Enter Date" class="form-control" />
		                    <span class="input-group-addon">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		</div>
		
		</br>
		</br>
		<input type="submit" name="" value="SEARCH">
	</form>
</div>
</section>
</body>
</html>