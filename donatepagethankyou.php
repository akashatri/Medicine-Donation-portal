

<?php
 
require 'donatepage.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$state    = $conn->real_escape_string($_POST['state']);
$city    = $conn->real_escape_string($_POST['city']);
$address    = $conn->real_escape_string($_POST['address']);
$phonenumber   = $conn->real_escape_string($_POST['phonenumber']);
$pincode    = $conn->real_escape_string($_POST['pincode']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into medicineform (u_name,u_email,phonenumber,state,city,address,pincode,message) VALUES('" . $name . "','" . $email . "','" . $phonenumber . "','" . $state . "','" . $city . "','" . $address . "','" . $pincode . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>