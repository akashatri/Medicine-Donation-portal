<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="main">
	<h1>Donation Center</h1>
	<h2>Show Your Support for our Cause</h2>

	<div class="lightSection">
		<h3>Hello, dear visitor!</h3>
		<p>This is Tutorialzine's Donation Center...</p>	

		<!-- The PayPal Donation Button -->

	</div>

	<div class="chart">
		Our Goal
	</div>

	<div class="donations">
		<?php echo $percent?>% done
	</div>

	<div class="clear"></div>

	<div class="donors">
		<h3>The Donor List</h3>
		<h4>Folks Who Showed Their Support</h4>

		<div class="comments">

		<!-- PHP Code that generates the comments -->

		</div> 

	</div> 

</div> 
<form action="<?php echo $payPalURL?>" method="post" class="payPalForm">
	<div>
		<input type="hidden" name="cmd" value="_donations" />
		<input type="hidden" name="item_name" value="Donation" />

		<!-- Your PayPal email: -->
		<input type="hidden" name="business"
		value="<?php echo $myPayPalEmail?>"/>

		<!-- PayPal will send an IPN notification to this URL: -->
		<input type="hidden" name="notify_url"
		value="<?php echo $url.'/ipn.php'?>" /> 

		<!-- The return page to which the user is
		navigated after the donations is complete: -->

		<input type="hidden" name="return"
		value="<?php echo $url.'/thankyou.php'?>" /> 

		<!-- Signifies that the transaction data will be
		passed to the return page by POST: -->

		<input type="hidden" name="rm" value="2" /> 

		<!-- General configuration variables for the paypal landing page. -->

		<input type="hidden" name="no_note" value="1" />
		<input type="hidden" name="cbt" value="Go Back To The Site" />
		<input type="hidden" name="no_shipping" value="1" />
		<input type="hidden" name="lc" value="US" />
		<input type="hidden" name="currency_code" value="USD" />

		<!-- The amount of the transaction: -->

		<select name="amount">
		<option value="50">$50</option>
		<option value="20">$20</option>
		<option value="10" selected="selected">$10</option>
		<option value="5">$5</option>
		<option value="2">$2</option>
		<option value="1">$1</option>
		</select>

		<input type="hidden" name="bn" value="
		PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest" />

		<!-- You can change the image of the button: -->
		<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!" />

	<img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif"
	width="1" height="1" />

	</div>
</form>
</body>
</html>
require "config.php";
require "connect.php";

// Determining the URL of the page:
$url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"]);

// Fetching the number and the sum of the donations:
list($number,$sum) = mysql_fetch_array(mysql_query("SELECT COUNT(*),SUM(amount) FROM dc_donations"));

// Calculating how many percent of the goal are met:
$percent = round(min(100*($sum/$goal),100));

// Building a URL with Google's Chart API:
$chartURL = 'http://chart.apis.google.com/chart?chf=bg,s,f9faf7&cht=p&chd=t:'.$percent.',-'.(100-$percent).'&chs=200x200&chco=639600&chp=1.57';