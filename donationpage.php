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
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>MEDICINE DONATION PORTAL</title>
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" type="text/css" href="donationpage.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="internalPage">
<div class="main">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
<ul class="nav navbar-nav">
<li class="home"><a href="medicinedonation_index.php">HOME</a></li>
<li class="pannelmedical"> <a  data-toggle="dropdown" href="#">MEDICAL</a>
<ul class="dropdown-menu">
<li><a href="medicalpage.php">MEDICAL HELP </a></li>
<li><a href="healthtipspage.php">HEALTH TIPS </a></li>
<li class="active"><a href="donationpage.php">DONATION STORIES</a></li>
</ul>
</li>
<li class="pannelmedicine"> <a href="donatepage.php">₹DONATE!</a></li>
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

<div class="story">
<marquee behavior="alternative"><h3>Tell Us Your INVINCIBLE STORIES And We Will publish Your Story To Our Website. </h3></marquee>
</div>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
	<div class="carousel-inner" role="listbox">
      <div class="item active">
      <h4 class="text">"Learn to light a candle in the darkest moments of someone’s life."</H4>
      </div>
      <div class="item">
          <h4 class="text">“Help others without any reason and give without the expectation of receiving anything in return.” </h4>    
      </div>
      <div class="item">
             <h4 class="text"> “We make a living by what we get.<br> We make a life by what we give.” </h4> 
      </div>
	   <div class="item">
              <h4 class="text">“You can give without loving,<br> but you can never love without giving.”  </h4> 
      </div>
	   <div class="item">
              <h4 class="text"> 
			  “No one is useless in this world <br> who lightens the burdens of another.”
	</h4> 
      </div>
</div>  
  <br>
  <br>
<h2 class="head1"><i>Some of the invincible stories we like to share are :</i></h2>
<div class="sample">

<b>Omkar Nath Sharma "Medicine Baba"</b> <br>
<img class="image"src="story1.jpg">
Omkar Nath Sharma born in India (around 1940) also known as the "Medicine Baba" (Medicine Monk). is a retired blood bank technician from Kailash Hospital in Greater Noida,
 Uttar Pradesh, India, who voluntarily collects unused medicines from people and distributes them to the poor for free of charge.
Omkar started collecting medicine after realising the acute medicine shortage, when he witnessed the Delhi Metro under-construction bridge collapsed in East Delhi in 2008, 
claiming the lives of two labourers and injuring many others. The local hospital administered basic first aid but nothing else. The injured returned home to die being unable
 to afford the cost of treatment. That incident shook Omkar and he became determined to not let something like this happen again.
Since last six years ,wearing a saffron kurta (shirt) that says "Mobile medicine bank for poor patients", Omkar starts every day at 6 am from his rented home in the Mangalapuri
 slums and goes door to door in different areas of Delhi asking for unused medicines, which he then distributes to charitable hospitals, NGOs and clinics.
Crippled at the age of 12 in a car accident, Omkar walks five or six kilometres per day. He cannot afford the metro rail fare, so travels by buses with the help of his senior 
citizen pass. In remote areas where buses do not ply, he simply walks. At the end of every collection, Omkar carefully catalogues everything in his binder: the name of the drug,
 the manufacturer, where he collected it and the expiry date. Omkar makes no profit from these.
Omkar lives with his wife and a 44-year-old mentally challenged son
</div>
<div class="fields">
		           <h1 id="loginname"><b>TELL US!!</b> </h1>
					<form action="thankyou.php" method="post">
  Name:<br>
  <input type="text" name="u_name" required placeholder="YOUR NAME"><br>
 
  Email:
  <input type="email" name="u_email" required placeholder="EMAIL"><br>
 
Subject:<br>
  <input type="text" name="subj" required placeholder="SUBJECT"><br>
 
Message:<br>
  <input type="text" name="message" required placeholder="MESSAGE"><br>
<input type="submit" class="submit" value="Submit"><br>
</form>
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

