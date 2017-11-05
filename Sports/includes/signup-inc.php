<?php

//code to check if submit button is clicked
if(isset($_POST['submit_btn'])) {

	//echo $_POST['gender'];
	// //testing code
	// if(isset($_POST['tennis_chkbox']))
	// {
	// 	$tennis_prof=;
	// 	echo $tennis_prof;
	// }
		

	// if(isset($_POST['bsk_chkbox']))
	// 	echo $_POST['bsk_sport'];

	// if(isset($_POST['volley_chkbox']))
	// 	echo $_POST['volley_sport'];

	

	//echo "$tennis_prof $bsk_prof $volley_prof $hiking_prof";
	//exit();


	//include the database file with connection object
	include_once '../dbconfig/config.php';

	/* To escape characters and treat the text inserted in fields as string.
	This is done to avoid sql injection. */

	$fname=mysqli_real_escape_string($con, $_POST['fname']); 
	$lname=mysqli_real_escape_string($con, $_POST['lname']);
	//$gender=mysqli_real_escape_string($con, $_POST['gender']);
	$gender=$_POST['gender'];
	$dob=mysqli_real_escape_string($con, $_POST['dob']);
	$city=mysqli_real_escape_string($con, $_POST['city']);
	$state=mysqli_real_escape_string($con, $_POST['state']);
	$zip=mysqli_real_escape_string($con, $_POST['zip']);
	$phnum=mysqli_real_escape_string($con, $_POST['phnum']);

	//storing values of sports and their proficiency

	if(isset($_POST['tennis_chkbox']))
	{
		$tennis_prof=$_POST['tennis_sport'];	
	}else{
		$tennis_prof=0;
	}
	

	if(isset($_POST['bsk_chkbox']))
	{
		$bsk_prof=$_POST['bsk_sport'];
	}else{
		$bsk_prof=0;
	}
	
	if(isset($_POST['volley_chkbox']))
	{
		$volley_prof=$_POST['volley_sport'];
	}else{
		$volley_prof=0;
	}
	
	if(isset($_POST['hiking_chkbox']))
	{
		$hiking_prof=$_POST['hiking_sport'];
	}else{
		$hiking_prof=0;
	}
	
	if(isset($_POST['swim_chkbox']))
	{
		$swim_prof=$_POST['swim_sport'];
	}else{
		$swim_prof=0;
	}
	
	if(isset($_POST['soccer_chkbox']))
	{
		$soccer_prof=$_POST['soccer_sport'];
	}else{
		$soccer_prof=0;
	}
	
	/*
	if(isset($_POST['tennis'])){
		$tennis=mysqli_real_escape_string($con, $_POST['tennis']);
	} else {
		$tennis="";
	}
	
	if(isset($_POST['basketball'])){
		$basketball=mysqli_real_escape_string($con, $_POST['basketball']);
	} else {
		$basketball="";
	}
	
	if(isset($_POST['volleyball'])){
		$volleyball=mysqli_real_escape_string($con, $_POST['volleyball']);
	} else {
		$volleyball="";
	}

	if(isset($_POST['hiking'])){
		$hiking=mysqli_real_escape_string($con, $_POST['hiking']);
	} else {
		$hiking="";
	}
	
	if(isset($_POST['swimming'])){
		$swimming=mysqli_real_escape_string($con, $_POST['swimming']);
	} else {
		$swimming="";
	}
	
	if(isset($_POST['soccer'])){
		$soccer=mysqli_real_escape_string($con, $_POST['soccer']);
	} else {
		$soccer="";
	}
	*/

	$email=mysqli_real_escape_string($con, $_POST['email']);
	$password=mysqli_real_escape_string($con, $_POST['password']);
	$cpassword=mysqli_real_escape_string($con, $_POST['password_confirm']);


	//  ************  Error handlers  ***************
	//good practice to check for errors first
	//check for empty fields
	if(empty($fname) || empty($lname) || empty($dob) || empty($city) || empty($state) || empty($zip) || empty($phnum) || empty($email)){
		header("Location: ../new_signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		//preg_match is a php function which checks for pattern of strings
		if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname) || !preg_match("/^[a-zA-Z]*$/", $city) || !preg_match("/^[a-zA-Z]*$/", $state)){
			header("Location: ../new_signup.php?signup=invalid");
			exit();
		}  else{
			//check for valid email when correct characters exist
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  // php function to check for a specific string
				header("Location: ../new_signup.php?signup=invalidemail");
				exit();
			} else{
				//check if email id already exists!
				// **********************   SQL SELECT QUERY ***********************
				$sql = "SELECT * FROM Users WHERE Email='$email'";
				//run the query
				$result = mysqli_query($con, $sql);
				//Check if we have any result
				$resultCheck = mysqli_num_rows($result);

				//throw error message if result query returns rows
				if($resultCheck > 0){
					header("Location: ../new_signup.php?signup=usertaken");
					exit();
				} else{
					//hash the password for safety to restrict admin to see password in DB
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					//Insert user into the database
					$sql2 = "INSERT INTO Users (First_Name, Last_Name, Gender, Dob, City, State, ZIP, Phone_Number, Tennis, Basketball, Volleyball, Hiking, Swimming, Soccer, Email, Password) VALUES ('$fname', '$lname','$gender', '$dob', '$city', '$state', '$zip', '$phnum', '$tennis_prof', '$bsk_prof', '$volley_prof', '$hiking_prof', '$swim_prof', '$soccer_prof', '$email', '$hashedPwd');";
					//$sql2 = "";
					mysqli_query($con, $sql2);  // do not need a variable as it needs to run
					header("Location: ../new_signup.php?signup=success");
					exit();
				}
			}
		}
	}
	
	

}
else{
	//send user back to signup page if user did not click submit button
	header("Location: ../new_signup.php");
	exit();
}
