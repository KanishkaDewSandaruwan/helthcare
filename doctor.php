<?php
	session_start();
	if(!isset($_SESSION['doctor'])){
		header('location:login.php');
	}
?>