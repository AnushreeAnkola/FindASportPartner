<?php
session_start();

include 'dbconfig/config.php';

//echo isset($_GET['hsport']);

if(isset($_GET['hsport'])) 
{
  $hvalue = $_GET['hsport'];

  if($hvalue=="Tennis"){
    echo 'Tennis clicked!';
    $_SESSION['sportSelected'] = "Tennis";
  } elseif ($hvalue=="Basketball") {
    echo 'Basketball clicked!';
    $_SESSION['sportSelected'] = "Basketball";
  } elseif ($hvalue=="Volleyball") {
    echo 'Volleyball clicked!';
    $_SESSION['sportSelected'] = "Volleyball";
  }  elseif ($hvalue=="Hiking") {
    echo 'Hiking clicked!';
    $_SESSION['sportSelected'] = "Hiking";
  } elseif ($hvalue=="Swimming") {
    echo 'Swimming clicked!';
    $_SESSION['sportSelected'] = "Swimming";
  } elseif ($hvalue=="Soccer") {
    echo 'Soccer clicked!';
    $_SESSION['sportSelected'] = "Soccer";
  }

  $sportVal = $_SESSION['sportSelected'];
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
  <link rel="stylesheet" href="css/font-awesome.min.css">

  
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/sport_style.css" type="text/css" />
</head>

<body>
<div class="wrapper">
    <?php
        include_once 'navbar_spf.php';
    

    echo '<h1 class="sport">'.$sportVal.'</h1>';
    

      $sql = "SELECT * FROM Events";
        $result = mysqli_query($con, $sql);
        // $resultCheck = mysqli_num_rows($result);
        // if($resultCheck == 1){  //user does exist
        //   echo "user records";
          //exit();
       // }

    ?>

  <!-- Code to add a table wich will have values from the Events table from the database -->
  <table class="data-table" id="myTable">
      <caption class="title"></caption>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date</th>
          <th>Number of Players</th>
          <th>Duration</th>
          <th>Request</th>
        </tr>
      </thead>
      <tbody>
      <?php
      
      while ($row = mysqli_fetch_assoc($result))
      {
        //$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
        echo '<tr>
            <td>'.$row['Initiator_Name'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'. date('l, F d, Y', strtotime($row['Date'])) .'</td>
            <td>'.$row['Num_Players'].'</td>
            <td>'.$row['Duration'].'</td>
            <td><button class="btn btn-submit btn_join" method="POST" action="includes/join-request-inc.php" >JOIN</button></td>
          </tr>';
      }

      //$row = mysqli_fetch_array($result);
        //echo 'Product: ' . $row['First_Name'] . ' Transaction Date: ' . $row['Dob'] . '</br/>';
   
      ?>
      </tbody>
    </table>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <!-- Code for Add button which will insert values -->
    <button onclick="document.getElementById('addEvent').style.display='block'" style="width:auto;" class="btn btn-danger">ADD</button>
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
                    <label><b>Time</b></label>
                  </td>
                  <td>
                    <input type="time" placeholder="time" name="time" required id="time"></br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label><b>duration</b></label>
                  </td>
                  <td>
                    <input type="text" placeholder="duration" name="duration" required id="duration"></br>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label><b>Name</b></label>
                  </td>
                    <td>
                      <input type="text" placeholder="Name" name="name" required id="name"></br>
                    </td>
                </tr>

                <tr>
                  <td>
                    <label><b>No. Of Player</b></label>
                  </td>
                  <td>
                    <input type="text" placeholder="players" name="players" required id="players"></br>
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
            <input id="event_submit" type="submit" value="Submit" style="width:auto;" class="btn btn-danger">
            <input value="Cancel" class="btn btn-danger" style="width:70px;" onclick="document.getElementById('addEvent').style.display='none'">
          </div>

        </form>
  </div>
<script>

$(document).ready(function(){
    $('#myTable').DataTable();
});

//code to get the value of the user whom you want to join from the first td in the row
$("#myTable").on("click", "button.btn_join", function(e) {
  
    //getting value of second column(hidden email)
    //var jEmail = $(this).parent().siblings(":nth-child(2)").text();
    //alert(jEmail);

    //sending value retrieved from jQuery into php variable
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