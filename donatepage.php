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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="donatepage.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
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
<li class="active"> <a href="donatepage.php">₹DONATE!</a></li>
<li class="pannelabout"> <a  href="aboutuspage.php">ABOUT US</a></li>
<li class="pannelmore"> <a data-toggle="dropdown" href="#">MORE</a>
<ul class="dropdown-menu">
<li><a href="aboutdonateus.php">DONATE US</a></li>
<li><a href="aboutdeveloper.php">DEVELOPER</a></li>
<li><a href="#">FOLLOW US</a></li>
</ul>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout&nbsp;&nbsp;</a></li>
</ul>
</nav><span "padding-top: 10px;">

<div class="bigimg">

<p class="hd"><i>"WE MAKE A LIVING <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
BY WHAT WE GET<br>
               BUT WE MAKE A LIFE <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
BY WHAT WE GIVE"</i></p>
<br>
<br>
<br>
<br>
<p class="hd1"><i>Your medicines will be distributed to poor people who cannot afford the medicines</i>
<br></p>
<div class="hd2">

<button onclick="document.getElementById('id01').style.display='block'"><h1 class="d">Donate Medicines</button>

<div id="id01" class="w3-modal">
    
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:1500px;background-color:black">
      <div class="w3-center">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        
      </div>
</div>
<div class="fields">
 <h1 class="loginname"><b>FILL UP THE FORM</b> </h1>
<form action="donatepagethankyou.php" method="post">
<div class="left-col">
  Your Name:<br>
  <input type="text" name="u_name" required><br>
 
  Email ID:<br>
  <input type="email" name="u_email" required><br>
  PHONE NUMBER:<br>
  <input type="text" id="pn" name="phonenumber" pattern="[1-9]{1}[0-9]{9}" required><br>
  Details Of Medicines:<br>
  <input type="text" name="message" required><br>
  <br><br><br>
  </div>
 <div class="right-col">
  

    STATE:<br>
  <input type="text" name="state" required><br>
   CITY:<br>
  <input type="text" name="city" required><br>
   STREET:<br>
  <input type="text" name="address" required><br>
   PINCODE:<br>
  <input type="text" name="pincode" required><br>
  <br>
   <input type="submit" class="submit" value="donate medicines"><br>
 </div>
 

</form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Contact us:<b><i>9466117720</b></i></span>
      </div>
	  </div>
</div>
    </div>

</div>
</div>
  


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

