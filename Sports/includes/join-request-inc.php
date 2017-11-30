<?php
session_start();


 if (isset($_POST['val'])) {
      $value = $_POST['val'];

      $usr_req_id = $_SESSION['u_id'];
      //echo $value;


//Code to insert new row in the User_request table

      //Prior check required to ensure that the combination of Event_ID and User_Request_Email does not exist. and also check when max players = no of players

    //include the database file with connection object
	include_once '../dbconfig/config.php';

	$sql2 = "INSERT INTO User_Requests (Event_ID, User_Request_Email, Request_Status) VALUES ('$value', '$usr_req_id', 'Requested');";
	mysqli_query($con, $sql2);  // do not need a variable as it needs to run
	//header("Location: ../SportSchedule.php?hsport=".$_SESSION['sportSelected']);
	echo "Request sent to user.";
      exit();
 	}


?>