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

<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="medicalpage.css">
<title>MEDICINE DONATION PORTAL</title>
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body class="internalPage">

<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
<ul class="nav navbar-nav">
<li class="home"><a href="medicinedonation_index.php">HOME</a></li>
<li class="pannelmedical"> <a  data-toggle="dropdown" href="#">MEDICAL</a>
<ul class="dropdown-menu">
<li class="active"><a href="medicalpage.php">MEDICAL HELP </a></li>
<li><a href="healthtipspage.php">HEALTH TIPS </a></li>
<li><a href="donationpage.php">DONATION STORIES</a></li>
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

<h1>Two million slum children die every year as India booms</h1>

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
       <img  src="medicalpage1.jpg"></img>
      </div>
      <div class="item">
              <img   src="medicalpage2.jpg"></img>
      </div>
      <div class="item">
               <img  src="medicalpage3.jpg"></img>
      </div>
	   <div class="item">
               <img src="medicalpage4.jpg"></img>
      </div>
	   <div class="item">
               <img src="medicalpage5.jpg"></img>
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="medicalhelp">



<p>India's growing status as an economic superpower is masking a failure to stem a shocking rate of infant deaths among its poorest people.</p>

<p>Nearly two million children under five die every year in India – one every 15 seconds – the highest number anywhere in the world. More than half die in the month after birth and 400,000 in their first 24 hours.</p>

<p>A devastating report by Save the Children, due out on Monday, reveals that the poor are disproportionately affected and the charity accuses the country of failing to provide adequate healthcare for the impoverished majority of its one billion people. While the World Bank predicts that India's economy will be the fastest-growing by next year and the country is an influential force within the G20, World Health Organisation figures show it ranks 171st out of 175 countries for public health spending.</p>

<p>Malnutrition, neonatal diseases, diarrhoea and pneumonia are the major causes of death. Poor rural states are particularly affected by a dearth of health resources. But even in the capital, Delhi, where an estimated 20% of people live in slums, the infant mortality rate is reported to have doubled in a year, though city authorities dispute this.</p>



<p>In the Bhagwanpura slum on the north-west fringes of the capital, numerous mothers have lost one or more infants in their first years of life through want of basic medical attention.</p>

<p><p>Akila Anees's son, Mohammed Armann, who was almost three, died in her arms three weeks ago. A torrential downpour had flooded the slum, rainwater mixing with the raw sewage which fills the ink-black drains bisecting the narrow lanes. It rose to a depth of 2ft. Within days, Armann had fallen ill and died soon afterwards.</p>

<p>Save the Children says millions of mothers and their babies are simply not getting the skilled medical care they need, and the poor, in particular, have been left behind. "For many poor parents and their children, seeking medical help is a luxury and health services are often too far away," said Shireen Miller, its head of policy and advocacy in India.</p>

<p>"The difference between rich and poor is huge. In a city like Delhi it is more stark because we have got state-of-the-art hospitals and women giving birth under flyovers. The health service has failed to deliver. They are supposed to reach the poorest, but they have not."</p>
</p>
<p>India's state healthcare system is supposed to be open to all, offering access to government-run hospitals. The reality is that, while government hospitals often offer high standards of care, they can be overcrowded, and if they are short of the required medicines patients are asked to pay for them themselves. In the meantime, private health care has surged and now accounts for the majority of India's medical provision, giving access to world-class facilities for those who can pay or who can afford private insurance premiums.</p>

<p>According to the UK India Business Council, about 50 million middle-class Indians can afford private healthcare – a growing number but still a tiny fraction of the overall population – while the country still lags behind other developed countries, with only 0.7 hospital beds per 1,000 people compared with a global average of 4.</p>



<p>Many slum-dwellers are too far from hospitals to make use of their facilities, because they cannot afford to use private auto-rickshaws to reach them and there is no public transport. Instead they turn to quack doctors – a slightly cheaper option, but because they are unregulated and notoriously unreliable, one fraught with dangers.</p></p>

<p>According to the report, the national mortality rate for under-fives in the poorest fifth of the population is 92 in 1,000 compared with 33 for the highest fifth. The national average is 72.</p>

<p>A couple of hundred yards from Anees's shack in Bhagwanpura, Gudiya, 22, sat holding her surviving daughter, Priya, two, amid scenes of abject squalor. Almost every square inch of the slum is covered in a layer of rubbish and human and animal waste. She has lost three children in four years.</p>

<p>Her most recent child, a boy, died two days after she gave birth at home, she said. "He cried, but it was feeble and he gradually turned cold. We wrapped him in blankets and took him to the hospital but I could feel he was getting weaker, and then I could see he was not breathing and there was no heartbeat and then the doctor said he was dead." Three years ago her three-month-old son, Ahmit, died from pneumonia. A year earlier her five-month-old daughter, Kumkum, died after developing a fever.</p>

<p>Delhi's health minister, Kiran Walia, has blamed migration into the city for its problems, but many poorer families simply feel that they are shut out by the system. Selma Shakil's son, Muzzamil, died in July after she was turned away from a government hospital. He was a year old. She sat on the hard wooden bed in the tiny room in Bhagwanpura that is home to her two surviving children and her crippled husband and dabbed at her eyes with her headscarf.</p>

<p>"It was shattering for us. We were so happy when he was born, he was so happy and playful. I would give everything to get him back, but we can't," said Shakil, 27.</p>

<p>Muzzamil had been ill for months. Shakil had taken him to a government hospital three times; the first time they gave him medicine and sent her home, the second time he was admitted for a few days and then discharged, and the third time they turned her away. "They said they would not take him; they said, 'You can't keep coming here, the child will be fine'."</p>


<p><p>The day he died the doctors told her he was sleepy because of the medicines he was taking. She went home, but then he started groaning. "His breath was shallow, and that was when I realised it was too late. I took him in my arms. He opened his eyes once and said 'Ammi' [mummy] and that was it. He died in my arms." They buried him the same evening.</p>

<p>The Save the Children report says nearly nine million children die worldwide every year before the age of five. India has the highest number of deaths, with China fifth. Afghanistan has the dubious distinction of featuring in the top 10 of total child deaths and of child deaths per head of population, a list topped by Sierra Leone.</p>

<p>The charity accuses the world's leaders of a scandalous failure to meet the Millennium Development Goals, agreed in 2000, to cut child mortality by two- thirds between 1990 and 2015 and calls for a sharp increase in health spending.</p>
<div class="buttonmodifier">
<h3><b><i>Your one donation can save many life's</b></i></h3>
<br>
<br>
<div class="btn-group btn-group-justified">
  <a href="donatepage.php" class="btn btn-primary">DONATE MEDICINES !!!</a>
  <a href="aboutdonateus.php" class="btn btn-primary">DONATE MONEY !!!</a>

</div>
<br>
</div>
   <button onclick="topFunction()" id="but" title="Go to top">Back To Top</button>
<script>

          window.onscroll = function() {scrollFunction()};

   function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
           } else {
        document.getElementById("myBtn").style.display = "none";
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

<footer class="footer" >
<div class="follow"><h4><b>Follow us on:</b></h4></div> <br>

    <div class="container text-center-left" >
        <p style="padding-left:10px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://www.facebook.com/donatemedicines/"><i class="fa fa-facebook-square"style="font-size:24px;color:#3b5998" aria-hidden="true"></i></a>
        <a href="https://twitter.com/login"><i class="fa fa-twitter-square"style="font-size:24px;color: #0084b4"></i></a>
        <a href="https://www.linkdin.com"><i class="fa fa-linkedin-square"style="font-size:24px;color: ##0077B5"></i></a>
        <a href="https://plus.google.com/"><i class="fa fa-google-plus-square"style="font-size:24px;color: #db4a39"></i></a>
        </p>
    </div>

</footer>
</div>





</body>
</html>

</p>