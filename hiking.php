<?php
session_start();

include 'dbconfig/config.php';

//echo isset($_GET['hsport']);
/*
if(isset($_GET['hsport'])) 
{
  $hvalue = $_GET['hsport'];
}

if($hvalue=="hiking")
    echo 'Hiking clicked!';
*/

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
<style type="text/css">
    
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: center;
    }

    .data-table tbody td {
      text-align: center;
    }
    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    .data-table th:nth-of-type(2) {

      display: none;

    }

    .data-table td:nth-of-type(2) {

      display: none;

    }


    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
</head>

<body>
  <div class="wrapper">
  <?php
      include_once 'navbar_spf.php';
    ?>
<h1 class="sport">HIKING</h1>
<?php

  $sql = "SELECT * FROM Users";
    $result = mysqli_query($con, $sql);
    // $resultCheck = mysqli_num_rows($result);
    // if($resultCheck == 1){  //user does exist
    //   echo "user records";
      //exit();
   // }

?>

<table class="data-table" id="myTable">
    <caption class="title"></caption>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
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
          <td>'.$row['First_Name'].'  '.$row['Last_Name'].'</td>
          <td>'.$row['Email'].'</td>
          <td>'.$row['Gender'].'</td>
          <td>'. date('l, F d, Y', strtotime($row['Dob'])) .'</td>
          <td>'.$row['City'].'</td>
          <td>'.$row['State'].'</td>
          <td><button class="btn btn-submit btn_join">JOIN</button></td>
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
<script>

$(document).ready(function(){
    $('#myTable').DataTable();
});

//code to get the value of the user whom you want to join from the first td in the row
$("#myTable").on("click", "button.btn_join", function(e) {
  
    //getting value of second column(hidden email)
    var jEmail = $(this).parent().siblings(":nth-child(2)").text();
    alert(jEmail);
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