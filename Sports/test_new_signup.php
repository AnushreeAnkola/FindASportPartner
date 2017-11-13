<!DOCTYPE html>
<html lang="en">
<head runat="server"> 	  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<style>
body {
    background-color: lightblue;
}

header{
	padding:20px 8%; 
	background-color:#607d8b;
}

.wrapper{
	height:100%;
}

#login-button{
	padding-top:15px;
}

#dd1 {
	margin-left: 26px;
}
#dd2 {
	margin-left: 2px;
}
#dd3 {
	margin-left: 15px;
}
#dd4 {
	margin-left: 28px;
}
#dd5 {
	margin-left: 2px;
}
#dd6 {
	margin-left: 23px;
}

footer { 
  z-index:99;
  bottom:0;
  left:0;
  right:0;
  background-color:#ddd; 
 } 

footer p.footertext{ 
   text-align: center; 
   text-transform: uppercase; 
   font-size: 80%; 
   color: #4d4d4f; 
   display:block;
   margin:5px 0 !important;
} 

#login { 
 position: relative; 
 right: -1000px; 
 top:-40px; 
 } 
 
 #sign{ 
 background-color: #4CAF50; 
 border: none; 
 color: white; 
 padding: 10px 20px; 
 text-align: center; 
 text-decoration: none; 
 display: inline-block; 
 font-size: 16px; 
 margin: 4px 2px; 
 cursor: pointer; 
 } 
 
 #sport{ 
 width: 200px; 
 height: 130px; 
 background-color: #4C535; 
 border: none; 
 color: white; 
 text-align: center; 
 text-decoration: none; 
 display: inline-block; 
 font-size: 16px; 
 margin: 70px 70px; 
 cursor: pointer; 
 border-radius: 12px; 
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); 
 } 
 
  #sport:hover { 
 background-color: #000;
 color: white; 
 }
 
 input[type=text1], input[type=password1] {
    width: 250px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
 button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}
.container-here{
	padding: 16px;
Width: 390px;
padding-bottom: 20px;
	
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 400px; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
  </style>
	
<script type="text/javascript">

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
	<div class="wrapper">
	
			<?php
      			include_once 'navbar_spf.php';
    		?>
		
		<div class="container">
		<h1>Create a New Account</h1>
			<div class="col-lg-12">
				<form name="game" id="game" action="includes/signup-inc.php" onsubmit="return validateForm()" method="POST">
					<div class="row">				
						<div class="col-sm-6 form-group">
							<label>First Name</label></br>
								<input type="text" name="fname" placeholder="Enter First Name Here.." class="form-control">
                				<p class="help-block">Enter you First Name only</p>
						</div>
   

             				 
						<div class="col-sm-6 form-group">
							<label>Last Name</label></br>
								<input type="text" name="lname" placeholder="Enter Last Name Here.." class="form-control">
                				<p class="help-block">Enter you Last Name only</p>
						</div>
		 	
					</div>
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Gender</label><br>
								<input type="radio" name="gender" value="male" checked> Male<br>
								<input type="radio" name="gender" value="female"> Female<br>
								<input type="radio" name="gender" value="other"> Other <br>
						</div>
					</div>
	
				
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Date of Birth</label> <br>
								<input type="date" name="dob" class="form-control">
						</div>	
					</div>						
						
					
					<div class="row">
						<div class="col-sm-4 form-group">
							<label>City</label> 
								<input type="text" name="city" placeholder="Enter City Name Here.." class="form-control">
						</div>	
						<div class="col-sm-4 form-group">
							<label>State</label>
								<input type="text" name="state" placeholder="Enter State Name Here.." class="form-control">
						</div>	
						<div class="col-sm-4 form-group">
							<label>Zip</label>
								<input type="number" name="zip" placeholder="Enter Zip Code Here.." class="form-control">
						</div>		
					</div>					
						

					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Phone Number</label>
								<input type="tel" name="phnum" placeholder="Enter Phone Number Here.." class="form-control">
						</div>		
					</div>	
					
							<!-- --- Add your Favorite Sport -- -->	
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Pick any 3 of your favourite sport </label> </br>
								<!--<form id="game" name="game">-->
									<input type="checkbox" id="sport1" class="tennis" name="tennis_chkbox"/> Tennis 
										<select name="tennis_sport" id="dd1">
											<option>Select</option>
											<option>Ameteur</option>
											<option>Intermediate</option>
											<option>Expert</option>
										</select> <br /> 
									<input type="checkbox" id="sport1" class="basketball" name="bsk_chkbox"/> Basketball
										<select name="bsk_sport" id="dd2">
											<option>Select</option>
											<option>Ameteur</option> 
											<option>Intermediate</option>
											<option>Expert</option>
										</select><br />
									<input type="checkbox" id="sport1" class="volleyball" name="volley_chkbox"/> Volleyball
										<select name="volley_sport" id="dd3">
											<option>Select</option>
											<option>Ameteur</option>
											<option>Intermediate</option>
											<option>Expert</option>
										</select><br />
									<input type="checkbox" id="sport1" class="hiking" name="hiking_chkbox"/> Hiking
										<select name="hiking_sport" id="dd4">
											<option>Select</option>
											<option>Ameteur</option>
											<option>Intermediate</option>
											<option>Expert</option>
										</select><br />			
									<input type="checkbox" id="sport1" class="swimming" name="swim_chkbox"/> Swimming
										<select name="swim_sport" id="dd5">
											<option>Select</option>
											<option>Ameteur</option>
											<option>Intermediate</option>
											<option>Expert</option>
										</select><br />
									<input type="checkbox" id="sport1" class="soccer" name="soccer_chkbox"/> Soccer
										<select name="soccer_sport" id="dd6" disabled>
											<option>Select</option>
											<option>Ameteur</option>
											<option>Intermediate</option>
											<option>Expert</option>
										</select><br />
								<!--</form>-->
						</div>
					</div>
 <script type="text/javascript">         
		
		        function validateForm() {
                        var x = document.forms["game"]["fname"].value;
	                if (x == "") {
                        alert("First Name must be filled out");
		        return false;
                                     }
		                var y = document.forms["game"]["lname"].value;
                                if (y == ""){
                                alert("Last Name must be filled out");
                                 return false;
                                            }
						var z = document.forms["game"]["dob"].value;
	                                        if (z == "") {
                                                alert("Date of Birth must be filled out");
				                return false;
                                                             }
						             var p = document.forms["game"]["city"].value;
	                                                     if (z == "") {
                                                             alert("city must be filled out");
			                               	     return false;
                                                                          }	
                                                                           var k = document.forms["game"]["state"].value;
	                                                                   if (k == "") {
                                                                           alert("State must be filled out");
				                                           return false;
                                                                                        }
					                                                 var r = document.forms["game"]["zip"].value;
	                                                                                 if (r == "") {
                                                                                         alert("Zip must be filled out");
				                                                         return false;
                                                                                                      }
			            var n = document.forms["game"]["phnum"].value;
	                            if (n == "") {
                                    alert("Phone Number must be filled out");
			            return false;
                                     }
				    var t = document.forms["game"]["email"].value;
	                            if (t == "") {
                                    alert("Email Id must be filled out");
				    return false;
                                     }	
				    var s = document.forms["game"]["password"].value;
	                            if (s == "") {
                                    alert("Password must be filled out");
				    return false;
                                     }
				    var m = document.forms["game"]["password_confirm"].value;
	                            if (m == "") {
                                    alert("Please Confirm password");
				    return false;
                                     }			 
									 
                                                }
        </script>							
<script type="text/javascript">

//Syntax: checkboxlimit(checkbox_reference, limit)
checkboxlimit(document.forms.game.sport1, 3)

</script>
	
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Email ID</label>
								<input type="email" id="email" name="email" placeholder="Enter Email ID Here.." class="form-control">
						</div>		
							
					</div>	
						

					<div class="row">				
						<div class="col-sm-6 form-group">
							<label>Password</label>
								<input type="password" id="password" name="password" placeholder="Enter Password Here.." class="form-control">
									<p class="help-block">Password should be at least 4 characters</p>
						</div>		
					</div>	

						
					<div class="row">				
						<div class="col-sm-6 form-group">
							<label>Confirm Password</label>
								<input type="password" id="password_confirm" name="password_confirm" placeholder="Enter Password Here.." class="form-control">
									<p class="help-block">Please confirm password</p>
						</div>				
					</div>
														<!-- Button -->
					<div class="row">
						<div class="col-sm-6 form-group">					
							<div class="controls">	
							<!--<form name="sign-form" id="signup-form" action="includes/signup-inc.php" method="POST">-->
								<button type="submit" class="btn btn-success" name="submit_btn">Register Me</button>
							<!--</form>-->
								
							</div>
						</div>
					</div>
				</form>
			 </div>
	    
		</div> <!-- close container -->
	</div> <!-- close wrapper -->

	
<footer>
    <p class="footertext">Copyright 2017-2018 SportPartner</p>
</footer>
		
	
	
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="includes/login-inc.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container-here">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname"  id="uname"/></br>

      <label><b>Password</b></label>
      <!--<input type="password1" placeholder="Enter Password" name="psw" id="psw" required /></br>-->
      <input type="password" placeholder="Enter Password" name="login_pwd" id="login_pwd"/></br>
        
      <button type="submit" name="login-submit">Login</button></br>
      <input type="checkbox" checked="checked" /> Remember me
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
