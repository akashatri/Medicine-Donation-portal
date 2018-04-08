<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: medicinedonation_index.php");
	exit;
}

if (isset($_POST['btn-login'])) {
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; 
	
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location:  medicinedonation_index.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$DBcon->close();
}
?>
<html>
<head>
<title>MEDICINE DONATION PORTAL</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="">
<style>
	#formLogin {
		padding: 20px 60px;
		
		color: #555;
		display: inline-block;		
		border-radius: 4px;
	}
	.field-group {
		margin-top:15px;
	}
	.input-field {
		padding: 8px;
		width: 200px;
		border: #A3C3E7 1px solid;
		border-radius: 4px;
	}
	.form-submit-button {
		background: #65C370;
		border: 0;
		padding: 8px 20px;
		border-radius: 4px;
		color: #FFF;
		text-transform: uppercase;
	}
	.member-dashboard {
		padding: 40px;
		
		color: #555;
		border-radius: 4px;
		display: inline-block;
	}
	.member-dashboard a {
		color: #09F;
		text-decoration:none;
	}
	.error-message {
		text-align:center;
		color:#FF0000;
	}
	div.back{
	background-image:url(login2.jpg);
	height:100%;
	width:100%;
	background-attachment:fixed;
}
h1
{
hieght:200px;
widht:50px;
padding: 10px;
	border-radius: 4px;
	border-width: 0px;
background-color:#91A8D0;
font-family:"serif"
}
.c
{

}
.footer {
    background-image: linear-gradient(to right, #dd4b39 0, #720e9e 100%);
    padding: 10px 10px;
	margin:0;
	
}

.footer a {
    text-align:center;
    font-size: 20px;
    padding: 10px;
    border-right: 1px solid #70726F;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}

.footer a:first-child {
    border-left: 1px solid #70726F;
}

.footer a:hover {
    color: white;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}
.follow
{
	text-align:center;
	
	color:black;
}
div.c{
	margin:100px 500px 400px 500px;
	
}


body,html
{
	overflow-x:hidden;
	overflow-y:hidden;
}
nm,nm1{
	text-shadow: 2px 2px 5px red;
	font-weight:bold;
	font-family:serif;
}
</style>

</head>
<body>
<div class="back">
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
<li class="pannellogin"><a href="signup.php"><span class="glyphicon glyphicon-user"> Sign Up</span></a></li>
<li class="active"><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"> Login&nbsp;</span></a></li>
</ul>
</nav><span "padding-top: 10px;">

<div class="c">
    <div class="login">
          <h1 id="loginname"><b>Login !!</b> </h1>
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Sign In.</h2><hr />
        
        <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
        
        <div class="field-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="field-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>
       
     	<hr />
        
        <div class="field-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
            
            <a href="signup.php" class="btn btn-default" style="float:right;">Sign UP Here</a>
            
        </div>  
        
        
      
      </form>
 </div>
 </div>
 </div>
 </div>
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


</body>
	
</html>

