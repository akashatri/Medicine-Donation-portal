
<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location:loginpage.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "portal";

 
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
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
<link rel="stylesheet" type="text/css" href="aboutdonateus.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
<ul class="nav navbar-nav">
<li class="home"><a href="medicinedonation_index.php">HOME</a></li>
<li class="pannelmedical"> <a  data-toggle="dropdown" href="#">MEDICAL</a>
<ul class="dropdown-menu">
<li><a href="medicalpage.php">MEDICAL HELP </a></li>
<li><a href="healthtipspage.php">HEALTH TIPS </a></li>
<li><a href="donationpage.php">DONATION STORIES</a></li>
</ul>
</li>
<li class="pannelmedicine"> <a href="donatepage.php">₹DONATE!</a></li>
<li class="pannelabout"> <a  href="aboutuspage.php">ABOUT US</a></li>
<li class="pannelmore"> <a data-toggle="dropdown" href="#">MORE</a>
<ul class="dropdown-menu">
<li class="active"><a href="aboutdonateus.php">DONATE US</a></li>
<li><a href="aboutdeveloper.php">DEVELOPER</a></li>
<li><a href="#">FOLLOW US</a></li>
</ul>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout&nbsp;&nbsp;</a></li>
</ul>
</nav>
<div class="back">

<div class="donation-container">
            
            <div class="donation-box">
			<form action="aboudonateusthankyou.php" method="post">
	            <div class="title">Donation Information</div>
	            
	            <div class="fields">
		            <input type="text" name="f_name" required placeholder="First Name"><br>
 
  <input type="text" name="l_name" required placeholder="LAST NAME"><br>
  <input type="email" name="u_email" required placeholder="EMAIL"><br>
 

	            </div>
	            
	            <div class="amount">
		            <div class="button">₹100</div>
		            <div class="button">₹500</div>
		            <div class="button">₹1000</div>
		            <div class="button">₹<input type="text" name="ruppee" class="set-amount" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;10.50" required > </input></div>
	            </div>
	            
	            <div class="switch">
					<input type="radio" name="q4[]" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
					<label for="one-time" class="switch-label switch-label-off">One-Time</label>
					<input type="radio" name="q5[]" class="switch-input" name="view" value="Monthly" id="monthly">
					<label for="monthly" class="switch-label switch-label-on">Monthly</label>
					<span class="switch-selection"></span>
			    </div>
			    <br>
				<br>
				<br><br><br><br><br><br><br><br><br><br><br>
			    <div class="checkboxes"><br>
					<input name="q1[]" type="checkbox" value="a1">&nbsp;&nbsp; E-mail me reciept<br></input><br>
					<input name="q2[]" type="checkbox" value="a1">&nbsp;&nbsp;Give Anonymously<br></input><br>
					<input name="q3[]" type="checkbox" value="a1">&nbsp;&nbsp;Add Me To Email List<br></input><br>
			    </div>
			    <input type="submit" class="submit" value="CLICK TO CONFIRM YOUR DETAILS!!"><br>
			    </form>
	            
	            <div class="donate-button">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business"
        value="donations@kcparkfriends.org">

    <!-- Specify a Donate button. -->
    <input type="hidden" name="cmd" value="_donations">

    <!-- Specify details about the contribution -->
    <input type="hidden" name="item_name" value="Friends of the Park">
    <input type="hidden" name="item_number" value="Fall Cleanup Campaign">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Display the payment button. -->
    <input type="image" name="submit"
    <img src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_donate_92x26.png"
    alt="Donate">
    <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>

				</div>
            </div>
            
        </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>
<footer class="footer">
<div class="follow"><h4><b>Follow us on:</b></h4></div> <br>

    <div class="container text-center">
        <a href="https://www.facebook.com/donatemedicines/"><i class="fa fa-facebook-square"style="font-size:24px;color:#3b5998" aria-hidden="true"></i></a>
        <a href="https://twitter.com/login"><i class="fa fa-twitter-square"style="font-size:24px;color: #0084b4"></i></a>
        <a href="https://www.linkdin.com"><i class="fa fa-linkedin-square"style="font-size:24px;color: ##0077B5"></i></a>
        <a href="https://plus.google.com/"><i class="fa fa-google-plus-square"style="font-size:24px;color: #db4a39"></i></a>
        
    </div>
	
</footer>
</body>
</html>

