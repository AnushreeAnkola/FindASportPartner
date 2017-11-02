<?php

session_start();

//check if we clicked the Submit button
if(isset($_POST['submit_btn'])){
	//including database connection file
	include '../dbconfig/config.php';

	$uname = mysqli_real_escape_string($con, $_POST['uname']);
	$pwd = mysqli_real_escape_string($con, $_POST['pwd']);

	//Error handlers
	//check if inputs are empty
	if(empty($uname) || empty($pwd)){
		header("Location: ../sports.php?login=empty");
		exit();
	} else{
		// SQL query to check if user exists with the given username
		$sql = "SELECT * FROM users WHERE username_column='$uname'";
		$result = mysqli_query($con, $sql);
		$resultCheck = mysqli_num_rows($result);

		if($resultCheck < 1){  //user does not exist
			header("Location: ../sports.php?login=error");
			exit();
		}else{
			//check for password
			//insert data from query result in php array named row.
			if($row = mysqli_fetch_assoc($result)){
				//De-hashing the pasword
				$hashedPwdCheck = password_verify($pwd, $row['password_column']);
				//returns boolean
				if(hashedPwdCheck == false){
					header("Location: ../sports.php?login=error");
					exit();
				} elseif(hashedPwdCheck == true){
					//Log in the user here, using Session variables
					$_SESSION['u_id'] = $row['username_columnfrom DB'];
					$_SESSION['fname'] = $row['fname_columnfrom DB'];
					$_SESSION['email'] = $row['email_columnfrom DB'];
					// storing values from successful query result into Session variables

					header("Location: ../sports.php?login=success");
					exit();
				}
			}
		}
	}

} else{
	header("Location: ../sports.php?login=error");
	exit();
}
