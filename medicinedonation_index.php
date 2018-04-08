<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location:loginpage.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MEDICINE DONATION PORTAL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://cdn.rawgit.com/inorganik/countUp.js/master/countUp.min.js"></script>
<style>
div.bck
{
	background-image:url("index1.png");
	
	background-attachment:fixed;
}

.Count {
    position: fixed;
    top: 8px;
    left: 8px;
}
</style>
<script>
 $(window).scroll(startCounter);
function startCounter() {
    if ($(window).scrollTop() > 200) {
        $(window).off("scroll", startCounter);
        $('.Count').each(function () {
            var $this = $(this);
            jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 1000,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
}
</script>
  </head>
<body >
<div class="back">
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" >
<ul class="nav navbar-nav">
<li class="active"><a href="#">HOME</a></li>
<li class="pannelmedical"> <a  data-toggle="dropdown" href="#">MEDICAL</a>
<ul class="dropdown-menu">
<li><a href="medicalpage.php">MEDICAL HELP </a></li>
<li><a href="healthtipspage.php">HEALTH TIPS </a></li>
<li><a href="donationpage.php">DONATION STORIES</a></li>
</ul>
</li>
<li class="pannelmedicine"> <a href="donatepage.php">$DONATE!</a></li>
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
<div class="hed"><h3><I> Welcomes you to INDIA's biggest Donation Portal to help poor people</i></h3></div>
<div class="bck">
<p class="topp"><b<br><br><br><br>As against the number of deaths, 71% of the total births happen in institutions and other births get care from physicians, nurses, mid-wives 
etc. Experts say a large percentage of deaths happen without medical care due to high cost and inaccessibility to medical care in rural and hilly areas.The data suggests a larger number of infants die in urban areas. Of the total infant deaths in the country, only 33.1% happen
 in rural</b></p>
<a href="aboutdonateus.php">
<button class="help"><h1 class="hh">
ALL WE NEED IS YOUR SUPPORT TO HELP POOR PEOPLE</h1></button></a><br>



	<h1 class="ch">Total medicines donated till now :<span id="value">100</span> </h1>

        <script type="text/javascript">
function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("value", 0, 42, 2);
</script>


<iframe class="videoframe" width="50%" height="75%" src="https://www.youtube.com/embed/IjeJfm2tQqg" frameborder="0" allowfullscreen></span></iframe>
 
<div style="margin-top:-4px;color:#fff;font-family: Arial, Helvetica, sans-serif;">
         <a href="#"> <button>BACK TO TOP</button></a>
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

