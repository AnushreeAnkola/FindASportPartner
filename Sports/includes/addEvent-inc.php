<?php

	session_start();

	include '../dbconfig/config.php';

//code to check if submit button is clicked
	if(isset($_POST['event_submit'])) {
	
	//include the database file with connection object
	include_once '../dbconfig/config.php';
	
	$sport=$_SESSION['sportSelected'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$email=$_SESSION['u_id'];
	$duration=$_POST['duration'];
	$max=$_POST['max'];
	
	$sql3 = "INSERT INTO `events`(`Sport`, `Date`, `Time`, `Email`, `Duration`, `Max_Players`) VALUES ('$sport','$date','$time','$email','$duration','$max')";
	
	$query_run=mysqli_query($con,$sql3);
	
	// check query is error if there is any error
	if($query_run)
		{
			echo mysqli_error($con);
		}
	
		

	}
?>