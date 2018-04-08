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
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>MEDICINE DONATION PORTAL</title>
<link rel="stylesheet" type="text/css" href="medicinedonation.css">
<link rel="stylesheet" type="text/css" href="healthtippage.css">
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
<li class="active"><a href="healthtips.php">HEALTH TIPS </a></li>
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
<div class="main">
<div class="heading">

<h1 class="top">Natural Home Remedies</span></h1>
</div>

<!--<div class="container text-center">-->
<img class="image1" src="healthtip1.jpg">
<!--</div>-->
<div class="text">
<p>
Traditional medicine (also known as indigenous or folk medicine) comprises medical aspects of traditional knowledge that developed over generations within various societies before 
the era of modern medicine.
</p>
<p>
The World Health Organization (WHO) defines traditional medicine as "the sum total of the knowledge, skills, and practices based on the theories, beliefs, and experiences indigenous
 to different cultures, whether explicable or not, used in the maintenance of health as well as in the prevention, diagnosis, improvement or treatment of physical 
 and mental illness.
 </p>
 <p>
 In some Asian and African countries, up to 80% of the population relies on traditional medicine for their primary health care needs. When adopted outside of its traditional culture
 , traditional medicine is often called alternative medicine.Practices known as traditional medicines include Ayurveda, Siddha medicine, Unani, ancient Iranian medicine, Iranian
 (Persian), Islamic medicine, traditional Chinese medicine, traditional Korean medicine,acupuncture, Muti, Ifá, and traditional African medicine. Core disciplines which study
 traditional medicine include herbalism, ethnomedicine, ethnobotany, and medical anthropology.
 </p>
 <p> Home remedy is a treatment to cure a disease or ailment that employs certain spices, vegetables, or other common items. Home remedies may or may not have medicinal properties
 that treat or cure the disease or ailment in question, as they are typically passed along by lay people (a practice that has been facilitated in recent years by the Internet).</p>
</div>

<h3 class="sub">GINGER</h3>
<div class="container text-center">
<span style="height:100;">
<img class="image" src="freeginger.jpeg"></span>
</div>
<div class="text">
<h3>Quell nausea</h3>
<p> Ginger is use to treat various disorders, such as nausea or arthritis pain,
 are under research, but no conclusions are possible from these studies about its effectiveness or safety in long-term use</p>
<p>In limited studies, ginger was found to be more effective than placebo for treating nausea caused by seasickness, morning sickness, and chemotherapy, although it was not found
 superior to placebo for treating postoperative nausea</p>
<p>Studies have found no clear evidence of harm from taking ginger during pregnancy, though its safety has not been established.
Allergic reactions to ginger generally result in a rash. Although generally recognized as safe, ginger can cause heartburn and other side effects, particularly if taken in powdered 
form.</p><p> Unchewed fresh ginger may result in intestinal blockage, and individuals who have had ulcers, inflammatory bowel disease, or blocked intestines may react badly to large 
quantities of fresh ginger. It can also adversely affect individuals with gallstones and may interfere with the effects of anticoagulants, such as warfarin or aspirin.</p><p>
Studies are inconclusive about the effects of using ginger for nausea or pain associated with various ailments. Side effects, mostly associated with consuming powdered ginger, 
are gas, bloating, heartburn, and nausea.Ginger powder may be effective for primary dysmenorrhea.</p>

</div>
<h3 class="sub">ALOE VERA</h3>
<div class="container text-center">
<span style="height:100;">
<img class="image" src="freealoevera.jpeg"></span>
</div>
<div class="text">

<p> Aloe vera is used in traditional medicine as a skin treatment. In Ayurvedic medicine it is called kathalai, as are extracts from agave.for aloe for agave </p><p>Early 
records of Aloe vera use appear in the Ebers Papyrus from the 16th century BC and in Dioscorides' De Materia Medica and Pliny the Elder's Natural History – both written 
in the mid-first century AD.It is also written of in the Juliana Anicia Codex of 512 AD.The plant is used widely in the traditional herbal medicine of many countries.
Commodities</p>
<p>Aloe vera is used on facial tissues where it is promoted as a moisturiser and anti-irritant to reduce chafing of the nose. Cosmetic companies commonly add sap or 
other derivatives from Aloe vera to products such as makeup, tissues, moisturizers, soaps, sunscreens, incense, shaving cream, or shampoos. A review of academic 
literature notes that its inclusion in many hygiene products is due to its "moisturizing emollient effect".</p>
<p>Other potential uses for extracts of Aloe vera include the dilution of semen for the artificial fertilization of sheep, as a fresh food preservative, or for water conservation in 
small farms.It has also been suggested that biofuels could be obtained from Aloe vera seeds.</p>

</div>
<h3 class="sub">CURY LEAVES</h3>
<div class="container text-center">
<span style="height:100;">
<img class="image" src="curry leaves.jpg"></span>
</div>
<div class="text">

<p>

If you are a heavy drinker, eat a lot of fish or indulge in other activities that could be damaging your liver, then you must eat curry leaves. This is because, according to a 
study published in AsianJournal of Pharmaceutical and Clinical Research, curry leaves were protect your liver from oxidative stress and harmful toxins that build-up in your body 
due to the presence of kaempferol, a potent antioxidant. The highly effective anti-oxidative property when combined with vitamin A and C not only protects the liver but also 
stimulates the organ to work more efficiently</p>.<br>
<I>Tip: Heat one spoon of homemade ghee, add the juice of a cup of kadip atta, some sugar and freshly powdered black pepper (kali mirch). Make sure you heat this mixture slightly
 (and not overheat it) as Kaempferol boils at a very low temperature.</I><br>
<br><b> Maintains your blood sugar levels :</b><br>
A study published in the Journal of Plant food for Nutrition, found that curry leaves lower your blood sugar levels by affecting the insulin activity. Apart from this, the
 presence of fiber in the leaves plays a significant role in controlling your blood sugar levels. Additionally, kadi patta is known to improve digestion and alter the way your
 body absorbs fat, thereby helping you lose weight. This is particularly of significance for people who are obese and suffer from diabetes. Read about expert tips to follow a 
 diabetic diet<br>
<I>Tip: To help keep your blood sugars under check, you should ideally add kadi patta to all your meals. Alternatively, consuming fresh curry leaves on an empty stomach every day
 might do the trick as well.</I>
<br><b>Protects you from heart disease :</b><br>
Did you know that curry leaves have properties that can help in lowering one’s blood cholesterol levels? Well, as per a study published in the Journal of Chinese Medicine 
, curry leaves prevent the oxidation of cholesterol as it is packed with antioxidants. This in turn increases the amount of good cholesterol (HDL) and protects you from heart
 disease and atherosclerosis.
<br><b>Helps with digestion :</b><br>
Curry leaves are known to be carminative in nature and thus, is highly effective against indigestion. Once ingested, it helps in the digestion process along with aiding in excretion.  In Ayurveda, it is believed that kadi patta has mild laxative properties that not only help the stomach get rid of unwanted waste and ‘ama’ (or toxic waste) and balances out the pitta levels in the body. Do you have digestion problem? Avoid these difficult to digest foods.
<br><b>Relieves the symptoms of diarrhoea :</b><br>
Even though curry leaves have mild laxative properties, it is a great remedy for diarrhoea. This is because kadi patta contains carbazole alkaloid that posses anti-bacterial 
and anti-inflammatory properties which in turn help in combating an upset stomach. Apart from that, curry leaves are also known to balance out all the three doshas in the body
 and reduce the amount of pitta in the stomach – a side effect of diarrhoea according to Ayurveda.<br>
<I>Tip: If you suffer from diarrhoea gently crush some kaddi patta into a ball (the size of a berry), and drink it with some buttermilk. Do this twice to thrice a day for relief.</I>
<br> <b>Can reduce the side effects of chemotherapy :</b><br>
According to a study [3], curry leaves have the amazing ability to protect the body from the ill effects of chemotherapy and radiotherapy. It not only protects the chromosomes 
from damage but also protects the bone marrow and halts the production of free radicals in the body. The study also suggested that this astonishing ability of the leaf could also 
indicate an ability to protect the body from cancer. Read about 10 dietary changes to prevent cancer. <br>
<b>Reduces congestion in the chest and nose :</b><br>
If you suffer from a wet cough, sinusitis or chest congestion, kadi patta is a very effective home remedy to relieve the symptoms. Packed with vitamin C, A and compounds such 
as kaempferol that is a very potent anti-inflammatory, decongestant and antioxidative agent, curry leaves can help loosen up and release congested mucous.  

</p>

</div>

<h3 class="sub">CHERRY</h3>
<div class="container text-center">
<span style="height:100;"> 
<img class="image" src="cherryfree1.jpeg"></span>
</div>
<div class="text">

<p> <b> Antioxidant Protection : </b><br>

<p>Cherries contain powerful antioxidants like anthocyanins and cyanidin. One study found the antioxidant activity of these substances isolated from tart cherries was superior 
to that of vitamin E and comparable to commercially available antioxidant products.</p>

<p>Sweet cherries also contain a small amount of quercetin, which is among the most potent in terms of antioxidant activity and a wide range of other health-promoting properties.</p>

<br></b> Cancer-Preventive Compounds :</b>
<br>
<p>Sweet cherries contain fiber, vitamin C, carotenoids, and anthocyanins, each of which may help play a role in cancer prevention. According to the National Cherry Growers &
 Industries Foundation:

"The potential role of sweet cherries in cancer prevention lies mostly in the anthocyanin content, especially in cyanidin. Sweet cherries are a good source of cyanidins, which
 appear to act as an antioxidant and in this role may reduce cancer risk…</p>

<p>A study… using human cancer cell lines demonstrated cell cycle arrest and apoptosis of mutated cells exposed to cherry anthocyanins…

Further research suggests that the growth arrest characteristics of cyanidin are likely, at least in part, to be a result of significant inhibitory effects of these cherry components on epidermal growth factor receptors…

Finally, there is compelling evidence from basic science that cyanidin may also promote cellular differentiation and thus reduce the risk for healthy cells to transform to cancer."</p>

<br><b>Reduce Inflammation and Your Risk of Gout</b>

<p>In a study of over 600 people with gout, those who ate only a ½-cup serving of cherries a day, the equivalent of about 10 or 12 cherries, or consumed cherry extract,
 had a 35 percent lower risk of a subsequent gout attack.5 Those who ate more cherries, up to three servings in two days, had an even lower, 50 percent reduction in risk.</p>

<p>Gout occurs when the metabolic processes that control the amount of uric acid in your blood fail to do their job effectively. The stiffness and swelling are a result of excess 
uric-acid-forming crystals in your joints, and the pain associated with this condition is caused by your body's inflammatory response to the crystals. </p>Past studies have found:

<p>Eating two servings of cherries after an overnight fast lead to a 15 percent reduction in uric acid, and lower nitric oxide and C-reactive protein levels (which are associated with inflammatory diseases like gout).6
The researchers noted the study supports "the reputed anti-gout efficacy of cherries" as well as "evidence that compounds in cherries may inhibit inflammatory pathways."

Consuming tart cherry juice daily for four weeks may lower your levels of uric acid</p>
<br><b>Support Healthy Sleep (Melatonin)</b>

<p>Cherries contain natural melatonin, which is a powerful antioxidant and free radical scavenger that helps "cool down" excess inflammation and associated oxidative stress. It also plays a vital role in sleep and bodily regeneration.

Based on daily environmental signals of light and darkness, your pineal gland has evolved to produce and secrete melatonin to help you sleep.</p><p> Research suggests that consuming tart cherry juice not only help increase your melatonin levels but may also improve time in bed, total sleep time and sleep efficiency. According to researchers:8

"…consumption of a tart cherry juice concentrate provides an increase in exogenous melatonin that is beneficial in improving sleep duration and quality in healthy men and women and might be of benefit in managing disturbed sleep."


</p>

</div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</button>
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

