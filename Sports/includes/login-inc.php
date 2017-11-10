<?php

session_start();

//check if we clicked the Login button
if(isset($_POST['login-submit'])){

	//testing code
	//echo $_POST['uname'];
	//exit();


	//including database connection file
	include '../dbconfig/config.php';

	$uname = mysqli_real_escape_string($con, $_POST['uname']);
	$pwd = mysqli_real_escape_string($con, $_POST['login_pwd']);



	//Error handlers
	//check if inputs are empty
	if(empty($uname) || empty($pwd)){
		header("Location: ../new_Home.php?login=empty");
		exit();
	} else{
		// SQL query to check if user exists with the given username
		$sql = "SELECT * FROM Users WHERE Email='$uname'";
		$result = mysqli_query($con, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck < 1){  //user does not exist
			header("Location: ../new_Home.php?login=error");
			exit();
		}else{
			//check for password
			//insert data from query result in php array named row.
			if($row = mysqli_fetch_assoc($result)){
				//De-hashing the pasword
				$hashedPwdCheck = password_verify($pwd, $row['Password']);
				//returns boolean
				if(hashedPwdCheck == false){
					header("Location: ../new_Home.php?login=error");
					exit();
				} elseif(hashedPwdCheck == true){
					//Log in the user here, using Session variables
					$_SESSION['u_id'] = $row['Email'];
					$_SESSION['fname'] = $row['First_Name'];
					$_SESSION['lname'] = $row['Last_Name'];
					$_SESSION['gender'] = $row['Gender'];
					$_SESSION['dob'] = $row['Dob'];
					$_SESSION['city'] = $row['City'];
					$_SESSION['state'] = $row['State'];
					$_SESSION['zip'] = $row['ZIP'];
					$_SESSION['phnum'] = $row['Phone_Number'];
					$_SESSION['tennis'] = $row['Tennis'];
					$_SESSION['bsk'] = $row['Basketball'];
					$_SESSION['volley'] = $row['Volleyball'];
					$_SESSION['hiking'] = $row['Hiking'];
					$_SESSION['swim'] = $row['Swimming'];
					$_SESSION['soccer'] = $row['Soccer'];
					// storing values from successful query result into Session variables


					header("Location: ../new_Home.php?login=success");
					exit();
				}
			}
		}
	}

} else{
	header("Location: ../new_Home.php?login=error");
	exit();
}