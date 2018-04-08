

<?php
 
require 'aboutdonateus.php';
$conn    = Connect();
$f_name    = $conn->real_escape_string($_POST['f_name']);
$l_name    = $conn->real_escape_string($_POST['l_name']);
$u_email   = $conn->real_escape_string($_POST['u_email']);
$ruppee    = $conn->real_escape_string($_POST['ruppee']);
$q4   = $conn->real_escape_string($_POST['q4']);
$q5    = $conn->real_escape_string($_POST['q5']);
$q1   = $conn->real_escape_string($_POST['q1']);
$q2    = $conn->real_escape_string($_POST['q2']);
$q3 = $conn->real_escape_string($_POST['q3']);
$query   = "INSERT into donationform (f_name,l_name,u_email,ruppee,q4,q5,q1,q2,q3) VALUES('" . $f_name . "','" . $l_name . "','" . $u_email . "','" . $ruppee . "','" . $q4 . "','" . $q5 . "','" . $q1 . "','" . $q2 . "','" . $q3 . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>