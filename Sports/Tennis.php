<?php
	require 'dbconfig/config.php';
?>



<!DOCTYPE html>
<html lang="en">
<head runat="server"> 	  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="style1.css" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="C:/Users/anuan/Downloads/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">

/***********************************************
* Limit number of checked checkboxes script- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
***********************************************/

function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onclick=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
			alert("You can only select a maximum of "+limit+" checkboxes")
			this.checked=false
			}
		}
	}
}
$(document).ready(function () {
$("#dd1").prop("disabled", "disabled");
$("#dd2").prop("disabled", "disabled");
$("#dd3").prop("disabled", "disabled");
$("#dd4").prop("disabled", "disabled");
$("#dd5").prop("disabled", "disabled");
$("#dd6").prop("disabled", "disabled");
            $("[class*=tennis]").change(function () {
                if ($(this).is(":checked")) {
                    $("[id*=dd1]").prop('disabled', false);
                }
                else {
                    $("[id*=dd1]").prop('disabled', true);
                }
            });
			$("[class*=basketball]").change(function () {
                if ($(this).is(":checked")) {
                    $("[id*=dd2]").prop('disabled', false);
                }
                else {
                    $("[id*=dd2]").prop('disabled', true);
                }
            });
			$("[class*=volleyball]").change(function () {
                if ($(this).is(":checked")) {
                    $("[id*=dd3]").prop('disabled', false);
                }
                else {
                    $("[id*=dd3]").prop('disabled', true);
                }
            });
			$("[class*=swimming]").change(function () {
                if ($(this).is(":checked")) {
                    $("[id*=dd5]").prop('disabled', false);
                }
                else {
                    $("[id*=dd5]").prop('disabled', true);
                }
            });
			$("[class*=hiking]").change(function () {
                if ($(this).is(":checked")) {
                    $("[id*=dd4]").prop('disabled', false);
                }
                else {
                    $("[id*=dd4]").prop('disabled', true);
                }
            });
			$("[class*=soccer]").change(function () {
                if ($(this).is(":checked")) {
                    $("[id*=dd6]").prop('disabled', false);
                }
                else {
                    $("[id*=dd6]").prop('disabled', true);
                }
            });
			});
			

</script>

</head>

<body>
<form action="Tennis.php" method="post">

<div class="wrapper">
	
	<header class="clearfix">
			<div id="logo" class="pull-left">
				<a href="sports.html"><img src="img/logo.png" class="img-responsive" alt="Sports Partner Finder"></a>
			</div>
			<div id="login-button" class="pull-right">
        		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-danger">Sign In</button>	
			</div>
    </header>
		
	<div class="container">
   	<h1>Tennis</h1>
		
	<div class="col-lg-12">
	
	
	<div class="row">
							
				<div class="col-sm-6 form-group">
				<label>Name of Initiator</label></br>
						<input name="name_initiator" type="text" placeholder="Enter Name Here.." class="form-control" required/>
                					<p class="help-block">Enter your Name</p>
				</div>
             			
		 	
	</div>
	<div class="row">
	<div class="col-sm-6 form-group">
				<label>Date</label><br>
				 	<input type="date" name="date" class="form-control" required/>
	</div>
	</div>
	
				
	<div class="row">
	        <div class="col-sm-6 form-group">
				<label>Time</label> <br>
  					<input type="time" name="time" class="form-control" required/>
			</div>	
	</div>						
						
					
			<div class="row">
							
				<div class="col-sm-4 form-group">
					<label>Duration</label> 
					<input type="text" name="duration" placeholder="Enter Duration here" class="form-control" required/>
				</div>	
					
			
			</div>					
						

	<div class="row">
	<div class="col-sm-6 form-group">
			<label>No of Player</label>
						<input type="number" name="num_players" placeholder="Enter Number of Players Here.." class="form-control" required/>
	</div>		
	</div>

    <div class="row">
	<div class="col-sm-6 form-group">
			<label>Max Player</label>
						<input type="number" name="max_players" placeholder="Enter maximum Number of players here.." class="form-control" required/>
	</div>		
	</div>	
					
		<!-- --- Add your Favorite Sport -- -->	
		<div class="row">
		<div class="col-sm-6 form-group">
		
		
		
		<!--<div class="dropdown">
		<button class="dropbtn" type="button" id="drop" data-toggle="dropdown" onclick="myFunction()">Dropdown Example
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
		<li><a href="#">HTML</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		</ul>
		</div>-->
		
		</form>
		</div>
		</div>
		<script type="text/javascript">

//Syntax: checkboxlimit(checkbox_reference, limit)
checkboxlimit(document.forms.game.sport1, 3)

</script>
	
			<div class="row">
					
				<div class="col-sm-6 form-group">
					<label>Email ID</label>
						<input type="email" id="email" name="email_players" placeholder="Enter Email ID Here.." class="form-control" required/>
				</div>		
							
			</div>	
						
			
			<!-- Button -->

		<div class="row">
		<div class="col-sm-6 form-group">					
			 <div class="controls">	
				 			 
				<a href="home.html" <button class="btn btn-danger">Go Back</button> </a>
				 <button name="add_btn" class="btn btn-success" value="Sign UP">Add</button>
				 <!-- <input name="submit_btn" type="submit" id="signup_btn" value="Sign UP" class="btn btn-success" /><br>-->
			</div>

		</div>
        </div>
			 </div>
	      	 </div>
			 </div>
			 
            </form>

			 <?php
				if(isset($_POST['add_btn']))
				{
					// echo '<script type="text/javascript"> alert("Submit button clicked") </script>';
					//defining variables to hold values of fields
					
					
					$sport="Tennis";
					$date=$_POST['date'];
					$time=$_POST['time'];
					$duration=$_POST['duration'];
					$name_initiator=$_POST['name_initiator'];
					$num_players=$_POST['num_players'];
					$max_players=$_POST['max_players'];
					$email_players=$_POST['email_players'];
					     
					$query= "INSERT INTO `event` (`sport`,`date`, `time`, `duration`, `name_initiator`, `num_players`, `max_players`, `email_players`) VALUES ('$sport','$date', '$time', '$duration', '$name_initiator', '$num_players', '$max_players', '$email_players')";

					    $query_run=mysqli_query($con,$query);
							
							if($query_run)
							{
								echo '<script type="text/javascript"> alert("You have joined successfully!") </script>';
							}
							else
							{
								echo '<script type="text/javascript"> alert("Error!") </script>';
							}
						
					}
					
				?>
	
	<footer>
        	<p class="footertext">Copyright 2017-2018 Pritul Padival</p>
    </footer>
		
	</div>
	
	<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container-here">
      <label><b>Username</b></label>
      <input type="text1" placeholder="Enter Username" name="uname" required></br>

      <label><b>Password</b></label>
      <input type="password1" placeholder="Enter Password" name="psw" required></br>
        
      <button type="submit">Login</button></br>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container-here" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>



<script>
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
