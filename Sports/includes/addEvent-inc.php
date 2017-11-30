<?php

	session_start();

	include '../dbconfig/config.php';

//code to check if submit button is clicked
	if(isset($_POST['event_submit'])){
	
		//include the database file with connection object
		include_once '../dbconfig/config.php';
		
		$sport=$_SESSION['sportSelected'];
		$date=$_POST['date'];
		$start_time=$_POST['stime'];
		$finish_time=$_POST['ftime'];
		$email=$_SESSION['u_id'];
		$max=$_POST['max'];
			
		// **********************   Check for CONFLICT event ***********************		
		// First check for same date events
		
		$sql = "SELECT * FROM Events WHERE Date='$date'";
		
		$result = mysqli_query($con, $sql);
		
		// Assuming at the beggining of check there is NO conflict event but in while loop we will find out if our assumption is wrong!
		$Event_Conflict = "False";
		
		// if event has the same date then check in while loop for start time and end time for conflict possibility
		while ($row = mysqli_fetch_assoc($result) AND $Event_Conflict == "False" ){
			// check start time or finish time are bigger than database start time and less than database finish time 
			// check that start time or finish time is conflicted with old event period
			
			$S_Time = date('h:i A', strtotime($row['Start_Time']));
			$F_Time = date('h:i A', strtotime($row['Finish_Time']));
			
			$start_time = date('h:i A', strtotime($start_time));
			$finish_time = date('h:i A', strtotime($finish_time));
			
		
			if((($start_time >= $S_Time) AND ($start_time < $F_Time)) OR (($finish_time > $S_Time) AND ($finish_time <= $F_Time)) OR (($start_time <= $S_Time) AND ($finish_time >= $F_Time ))){
			
				$Event_Conflict = "True";
				echo "<script> 
				alert('Your sport event has been conflicted with another Sport Event!'); 
				window.location.href='../SportSchedule.php?hsport=$sport';
				</script>";
			}
		}

		if($Event_Conflict == "False"){
			$sql3 = "INSERT INTO `Events`(`Sport`, `Date`, `Start_Time`, `Finish_Time`, `Email`, `Max_Players`) VALUES ('$sport','$date','$start_time', '$finish_time', '$email','$max')";
		
			$query_run=mysqli_query($con,$sql3);
		
			// check query is error if there is any error
			if($query_run)
				{
					header("Location: ../SportSchedule.php?hsport=".$sport);
				}
			else
				{
					echo mysqli_error($con);
				}
		}
	}
?>