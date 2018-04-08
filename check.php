/* Form Required Field Validation */
foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$error_message = "All Fields are required";
	break;
	}
}
/* Password Matching Validation */
if($_POST['password'] != $_POST['confirm_password']){ 
$error_message = 'Passwords should be same<br>'; 
}

/* Email Validation */
if(!isset($error_message)) {
	if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
	$error_message = "Invalid Email Address";
	}
}

/* Validation to check if gender is selected */
if(!isset($error_message)) {
if(!isset($_POST["gender"])) {
$error_message = " All Fields are required";
}
}

/* Validation to check if Terms and Conditions are accepted */
if(!isset($error_message)) {
	if(!isset($_POST["terms"])) {
	$error_message = "Accept Terms and Conditions to Register";
	}
}