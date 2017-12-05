<?php
session_start();

include 'dbconfig/config.php';

//echo isset($_GET['hsport']);

if(isset($_GET['hsport']))
{
  $hvalue = $_GET['hsport'];

  if($hvalue=="Tennis"){
    //echo 'Tennis clicked!';
    $_SESSION['sportSelected'] = "Tennis";
  } elseif ($hvalue=="Basketball") {
    //echo 'Basketball clicked!';
    $_SESSION['sportSelected'] = "Basketball";
  } elseif ($hvalue=="Volleyball") {
    //echo 'Volleyball clicked!';
    $_SESSION['sportSelected'] = "Volleyball";
  }  elseif ($hvalue=="Hiking") {
    //echo 'Hiking clicked!';
    $_SESSION['sportSelected'] = "Hiking";
  } elseif ($hvalue=="Swimming") {
    //echo 'Swimming clicked!';
    $_SESSION['sportSelected'] = "Swimming";
  } elseif ($hvalue=="Soccer") {
    //echo 'Soccer clicked!';
    $_SESSION['sportSelected'] = "Soccer";
  }

  $sportVal = $_SESSION['sportSelected'];
}

// code to delete record when user clicks on delete button of his/her own record
if(isset($_GET['delete_id']))
{
     //$sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];   NEED to write UPDATE query
    $sql_query="UPDATE Events SET Delete_Event=1 WHERE Event_ID =".$_GET['delete_id'];
     mysqli_query($con, $sql_query);
     //header("Location: SportSchedule.php");
     //exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head runat="server">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <!-- Files for Data Table -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> --><!-- Remove the comment from this line and remove the below line also-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/sport_style.css" type="text/css" />
</head>

<body>
<div class="container-wrapper" >
<div class="wrapper">
    <?php
        include_once 'navbar_spf.php';


    //echo '<h1 class="sport sportHeading">'.$sportVal.'</h1><br>';
    echo '<h1 class="sport sportHeading">'.$_SESSION['sportSelected'].'</h1><br>';

      // ********************** MODIFY DATE <= to >= and ADD ORDER BY CLAUSE  **********************************
      $sql = "SELECT * FROM Events INNER JOIN Users ON Events.Email = Users.Email WHERE Date <= CURDATE() AND Sport = '$sportVal' AND Delete_Event=0";
      //$sql = "SELECT * FROM Events INNER JOIN Users ON Events.Email = Users.Email WHERE Date <= CURDATE() AND Sport = 'echo implode(, $_SESSION\['sportSelected'\])' AND Delete_Event=0";
        $result = mysqli_query($con, $sql);
        // $resultCheck = mysqli_num_rows($result);
        // if($resultCheck == 1){  //user does exist
        //   echo "user records";
          //exit();
       // }

    ?>
	<div class="initiateBlock clearfix">
       <!-- Code for Add button which will insert values -->
       <p class="text-center">Click on "Initiate Event" to add an event of your choice. (ONLY FOR REGISTERED USERS)</p>

       <?php
       // escape single quotes or opt to store html in a separate php variable and displayed only for logged in user
       if (isset($_SESSION['u_id'])){
        echo '<center><button onclick="document.getElementById(\'addEvent\').style.display=\'block\'" style="width:auto;" class="btn btn-primary pull-right"><i class="fa fa-check" aria-hidden="true" style="margin-right:5px"></i>Initiate Event</button></center>';
     }
     ?>
      </div>

  <!-- Code to add a table wich will have values from the Events table from the database -->
  <table class="data-table" id="myTable" background="img/grass.jpg">
      <caption class="title"></caption>

      <thead class="tableHeader">
        <tr>
      <th>Date</th>
      <th>Event ID</th>
      <th>Start Time</th>
      <th>Finish Time</th>
      <th>State</th>
      <th>City</th>
      <th>Name</th>
      <th>Skill Level</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Email</th>
      <th># of Players</th>
      <th>Maximum Players</th>
      <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php

      while ($row = mysqli_fetch_assoc($result))
      {
        //$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
        /* check for session variable of email id. This is used to set the td tag to display delete button if logged in user matches
        the user email id in the data table and do not display the Join button as user cannot join his/her own event. */
        if (isset($_SESSION['u_id'])) {
          //$deleteRowBtn = (($row['Email'] == $_SESSION['u_id'])?'<a href="javascript:delete_id('.$row['Event_ID'].')"><span class="glyphicon glyphicon-remove-circle"></span></a>':'<button class="btn btn-submit btn_join btn-sm" method="POST" action="includes/join-request-inc.php" >JOIN</button>');
          $deleteRowBtn = (($row['Email'] == $_SESSION['u_id'])?'<a href="javascript:delete_id('.$row['Event_ID'].')"><span class="glyphicon glyphicon-remove-circle"></span></a>':'<button class="btn btn-submit btn_join btn-sm">JOIN</button>');
        }else{
          $deleteRowBtn= "";
        }

        //age calculation
        $userAge = (date('Y') - date('Y',strtotime($row['Dob'])));

        echo '<tr>
            <td>'.date('l, F d, Y', strtotime($row['Date'])).'</td>
            <td>'.$row['Event_ID'].'</td>
            <td>'.date('h:i A', strtotime($row['Start_Time'])).'</td>
            <td>'.date('h:i A', strtotime($row['Finish_Time'])).'</td>
            <td>'.$row['State'].'</td>
            <td>'.$row['City'].'</td>
            <td>'.$row['First_Name'].'  '.$row['Last_Name'].'</td>
            <td>'.$row[$sportVal].'</td>
            <td>'.$row['Gender'].'</td>
            <td>'.$userAge.'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['Num_Players'].'</td>
            <td>'.$row['Max_Players'].'</td>
            <td>'.$deleteRowBtn.'</td>
          </tr>';
      }

      //$row = mysqli_fetch_array($result);
        //echo 'Product: ' . $row['First_Name'] . ' Transaction Date: ' . $row['Dob'] . '</br/>';

      ?>
      </tbody>
    </table>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


</div>


<div id="id01" class="modal">

  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required></br>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required></br>

      <button type="submit">Login</button></br>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

  <!-- Code for AddEvent div which holdds fiels to input event in Events table -->
  <div id="addEvent" class="modal">

        <form class="modal-content animate" action="includes/addEvent-inc.php" method="POST">
          <div class="imgcontainer">
            <span onclick="document.getElementById('addEvent').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>

          <div class="container">
              <table>
                  <tr>
                    <td>
                      <label><b>Date</b></label></td>
                      <td>
                        <input type="date" placeholder="date" name="date" required id="date"></br>
                      </td>
                  </tr>


                <tr>
                  <td>
                    <label><b>Start Time</b></label>
                  </td>
                  <td>
                    <input type="time" placeholder="time" name="stime" required id="time"></br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label><b>Finish Time</b></label>
                  </td>
                  <td>
                    <input type="time" placeholder="time" name="ftime" required id="time"></br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label><b>Max PLayers</b></label>
                  </td>
                  <td>
                    <input type="text" placeholder="Max" name="max" required id="max"></br>
                  </td>
                </tr>
              </table>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <input name="event_submit" id="event_submit" type="submit" value="Submit" style="width:auto;" class="btn btn-success">
            <input value="Cancel" class="btn btn-danger" style="width:70px;" onclick="document.getElementById('addEvent').style.display='none'">
          </div>

        </form>
  </div>
</div>
<script>

//function to execute on click of delete button
function delete_id(id)
{
     if(confirm('Sure To Remove This Event ?'))
     {
        //alert(id);
        //alert("<?php echo $sportVal ?>");
        window.location.href='SportSchedule.php?delete_id='+id+'&hsport=<?php echo $sportVal ?>';
     }
}

$(document).ready(function(){
    $('#myTable').DataTable();
});

//code to get the value of the user whom you want to join from the first td in the row
$("#myTable").on("click", "button.btn_join", function(e) {

    //getting value of second column(hidden email)
    //var jEmail = $(this).parent().siblings(":nth-child(2)").text();
    //alert(jEmail);

    //sending value retrieved from jQuery into php variable. second column contains Event_ID value that is hidden using CSS
    //$.post('includes/join-request-inc.php', 'val=' + $(this).parent().siblings(":nth-child(4)").text(), function (response) {
      $.post('includes/join-request-inc.php', 'val=' + $(this).parent().siblings(":nth-child(2)").text(), function (response) {
      alert(response);
   });



});


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>

</body>

</html>
