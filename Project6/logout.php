<?php
echo "<script>ifwindow.alert('Thank you!')</script>";
session_start();
//unset all session
$_SESSION = array();

//unset cookie
if(isset($_COOKIE['use'])){
	setcookie("use", '', time() - 1000000);
}

//destroy session
session_destroy();
//head to login
header("location: login.php");
?>