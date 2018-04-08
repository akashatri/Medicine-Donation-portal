<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: medicinedonation_index.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
	
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
	
	$check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>MEDICINE DONATION PORTAL</title>
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
 <link rel="stylesheet" type="text/css" href="signupphp.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
 div.back1
{
background-image:url("login.jpg");

height:130%;
width:100%;
background-attachment:fixed;

}
body{
	width:100%;
	font-family:calibri;
	overflow-y:hidden;
	
}
.error-message {
	padding: 7px 10px;
	
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
	margin-left:250px;
margin-right:300px;
}
.success-message {
	padding: 7px 10px;
	
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demotable {
	
	width: 50%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	
	border-radius: 4px;
	padding: 20px 40px;
	
	margin-left:250px;
	overflow-y:hidden;
}
.demotable td {
	padding: 15px 0px;
	
	
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
div.main{
	
}
h1
{
hieght:200px;
widht:50px;
padding: 10px;
	border-radius: 4px;
	border-width: 0px;
background-color:#91A8D0;
margin-left:250px;
margin-right:300px;

font-family:"serif"

}
div.ac{
	margin-bottom:10px;
}
.fields {
	width: 28%;
	display: block;
	position: absolute;
	overflow-y:hidden;
	
}
.fields input {
	width: 90%;
	font-size: 17px;
	padding: 10px;
	border-radius: 4px;
	border-width: 0px;
	color: #5C5C5C;
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	margin-bottom: 10px;
	-webkit-font-smoothing: antialiased;
}.small
{
width:5px;
padding:2px;
}
</style>
</head>
<body>
<div class="back1">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
<ul class="nav navbar-nav">
<li class="home"><a href="#">HOME</a></li>
<li class="pannelmedical"> <a  data-toggle="dropdown" href="#">MEDICAL</a>
<ul class="dropdown-menu">
<li><a href="#">MEDICAL HELP </a></li>
<li><a href="#">HEALTH TIPS </a></li>
<li><a href="#">DONATION STORIES</a></li>
</ul>
</li>
<li class="pannelmedicine"> <a href="#">₹DONATE!</a></li>
<li class="pannelabout"> <a  href="#">ABOUT US</a></li>
<li class="pannelmore"> <a data-toggle="dropdown" href="#">MORE</a>
<ul class="dropdown-menu">
<li><a href="#">DONATE US</a></li>
<li><a href="#">DEVELOPER</a></li>
<li><a href="#">FOLLOW US</a></li>
</ul>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>
<li class="pannellogin"><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"> Login&nbsp;</span></a></li>
</ul>
</nav><span "padding-top: 10px;">

<div class="main">

    <div class="active1">
      <h1 class="loginname"><b>Sign Up</b>  </h1><br>
      <form class="form-signin" method="post" id="register-form">
      
        
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <div class="demotable">
        <input type="text" class="demoInputBox" placeholder="Username" name="username" required  />
        </div>
        
        <div class="demotable">
        <input type="email" class="demoInputBox" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div>
        
        <div class="demotable">
        <input type="password" class="demoInputBox" placeholder="Password" name="password" required  />
        </div>
        <div class="demotable">
        <hr />
        </div>
     	
        
        <div class="demotable">
            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button> 
            <a href="loginpage.php" class="btn btn-default" style="float:right;">Log In Here</a>
        </div> 
      
      </form>

   </div>
   
   </div>
    </div>
    <div class=ac>
	</div>

	<footer class="footer">
<div class="follow"><h4><b>Follow us on:</b></h4></div> <br>
<div class="container text-center">
        <a href="#"><i class="fa fa-facebook-square"style="font-size:24px;color:#3b5998" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter-square"style="font-size:24px;color: #0084b4"></i></a>
        <a href="#"><i class="fa fa-linkedin-square"style="font-size:24px;color: ##0077B5"></i></a>
        <a href="#"><i class="fa fa-google-plus-square"style="font-size:24px;color: #db4a39"></i></a>
</div>
</footer>
</div>
</body>
</html>

