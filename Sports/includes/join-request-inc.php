<?php
session_start();

//include the database file with connection object
include_once '../dbconfig/config.php';

 if (isset($_POST['val'])) {
      $value = $_POST['val'];

      $usr_req_id = $_SESSION['u_id'];
      //echo $value;


  //Code to insert new row in the User_request table

      //Prior check required to ensure that the combination of Event_ID and User_Request_Email does not exist. and also check when max players = no of players

    
	 
    //Select query to check if user and event id combination exists in User_Requests table
    $sql3 = "SELECT * FROM User_Requests WHERE User_Request_Email = '$usr_req_id' AND Event_ID = $value";
    $result2 = mysqli_query($con, $sql3);

    if (!$result2) {
    die(mysqli_error($con));
    }

    $resultCheck2 = mysqli_num_rows($result2);

    if($resultCheck2 < 1){  //combination does not exist

          //check when max players = number of players in events table
          $sql_select = "SELECT Num_Players, Max_Players FROM Events WHERE Event_ID = $value";
          $select_result = mysqli_query($con, $sql_select);

          if($row = mysqli_fetch_assoc($select_result)){
            if ($row['Num_Players'] == $row['Max_Players']) {
              echo "Maximum capacity of event is filled.";
              exit();
            }
          }

      $sql2 = "INSERT INTO User_Requests (Event_ID, User_Request_Email, Request_Status) VALUES ('$value', '$usr_req_id', 'Requested');";
      mysqli_query($con, $sql2);  // do not need a variable as it needs to run
        //header("Location: ../SportSchedule.php?hsport=".$_SESSION['sportSelected']);

        //Also require an update statement to increase value of max players
            $sql_update_query = "UPDATE Events SET Num_Players = (Num_Players + 1) WHERE Event_ID = $value";
            mysqli_query($con, $sql_update_query);

        if (!mysqli_query($con, $sql_update_query)) {
        die(mysqli_error($con));
        }

        echo "Request sent to user.";
        exit(); 



    }else{
       echo "You have already joined this event.";
      exit();  
    }



	
 	}


?>