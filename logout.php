<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: loginpage.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location:medicinedonation_index.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: loginpage.php");
}
