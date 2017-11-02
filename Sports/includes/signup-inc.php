<?php

//code to check if submit button is clicked
if(isset($_POST['submit_btn'])) {

	//include the database file with connection object
	include_once '../dbconfig/config.php';

	/* To escape characters and treat the text inserted in fields as string.
	This is done to avoid sql injection. */

	$fname=mysqli_real_escape_string($con, $_POST['fname']); 
	$lname=mysqli_real_escape_string($con, $_POST['lname']);
	$gender=mysqli_real_escape_string($con, $_POST['gender']);
	$dob=mysqli_real_escape_string($con, $_POST['dob']);
	$city=mysqli_real_escape_string($con, $_POST['city']);
	$state=mysqli_real_escape_string($con, $_POST['state']);
	$zip=mysqli_real_escape_string($con, $_POST['zip']);
	$phnum=mysqli_real_escape_string($con, $_POST['phnum']);
	
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
	
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$password=mysqli_real_escape_string($con, $_POST['password']);
	$cpassword=mysqli_real_escape_string($con, $_POST['password_confirm']);


	//  ************  Error handlers  ***************
	//good practice to check for errors first
	//check for empty fields
	if(empty($fname) || empty($lname) || empty($dob) || empty($city) || empty($state) || empty($zip) || empty($phnum) || empty($email)){
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		//preg_match is a php function which checks for pattern of strings
		if(!preg_match("/^[a-zA-Z]*$/, $fname") || !preg_match("/^[a-zA-Z]*$/, $lname") || !preg_match("/^[a-zA-Z]*$/, $city") || !preg_match("/^[a-zA-Z]*$/, $state")){
			header("Location: ../signup.php?signup=invalid");
			exit();
		}  else{
			//check for valid email when correct characters exist
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  // php function to check for a specific string
				header("Location: ../signup.php?signup=invalidemail");
				exit();
			} else{
				//check if email id already exists!
				// **********************   SQL SELECT QUERY ***********************
				$sql = "SELECT * from users WHERE email_column='$email'";
				//run the query
				$result = mysqli_query($con, $sql);
				//Check if we have any result
				$resultCheck = mysqli_num_rows($result);

				//throw error message if result query returns rows
				if($resultCheck > 0){
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else{
					//hash the password for safety to restrict admin to see password in DB
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					//Insert user into the database
					$sql = "INSERT INTO users () VALUES ();";
					mysqli_query($con, $sql);  // do not need a variable as it needs to run
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}
	
	/*if($cpassword == $password)
	{
		$query= "select * from user WHERE Email='$email'";
		$query_run=mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run) > 0)
		{
			// there is already email address exist
			echo '<script type="text/javascript"> alert("Email address is already exists .... please try another email address") </script>';
		}
		else
		{ 
			$query= "INSERT INTO `User` (`First_Name`, `Last_Name`, `Gender`, `DOB`, `City`, `State`, `Zip`, `Ph_Number`, `Tennis`, `Basketball`, `Volleyball`, `Hiking`, `Swimming`, `Soccer`, `Email`, `Password`) VALUES ('$fname', '$lname', '$gender', '$dob', '$city', '$state', '$zip', '$phnum', '$tennis', '$basketball', '$volleyball', '$hiking', '$swimming', '$soccer', '$email', '$password')";

			$query_run=mysqli_query($con,$query);
			
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("Your account has been created successfully!") </script>';
			}
			else
			{
				echo '<script type="text/javascript"> alert("Error!") </script>';
			}
		}
	}*/

}
else{
	//send user back to signup page if user did not click submit button
	header("Location: ../signup.php");
	exit();
}