<?php

if(isset($_POST['logout_btn'])){
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../new_Home.php?logout=success"); 
	exit();
}