<?php
	include_once 'header.php';
	//require 'dbconfig/config.php';
?>

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
<form action="includes/signup-inc.php" method="POST">

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
   	<h1>Create a New Account</h1>
		
	<div class="col-lg-12">
	
	
	<div class="row">
							
				<div class="col-sm-6 form-group">
				<label>First Name</label></br>
						<input name="fname" type="text" placeholder="Enter First Name Here.." class="form-control" required/>
				</div>
             				 
				<div class="col-sm-6 form-group">
				<label>Last Name</label></br>
						<input name="lname" type="text" placeholder="Enter Last Name Here.." class="form-control" required/>
				</div>
		 	
	</div>
	<div class="row">
	<div class="col-sm-6 form-group">
				<label>Gender</label><br>
				 	<input name="gender" type="radio" value="Male" checked> Male<br>
  					<input name="gender" type="radio" value="Female"> Female<br>
 					<input name="gender" type="radio" value="other"> Other <br>
	</div>
	</div>
	
				
	<div class="row">
	<div class="col-sm-6 form-group">
				<label>Date of Birth</label> <br>
  					<input type="date" name="dob" class="form-control" required/>
			</div>	
	</div>						
						
					
			<div class="row">
							
				<div class="col-sm-4 form-group">
					<label>City</label> 
					<input type="text" name="city" placeholder="Enter City Name Here.." class="form-control" required/>
				</div>	
				<div class="col-sm-4 form-group">
					<label>State</label>
					<input type="text" name="state" placeholder="Enter State Name Here.." class="form-control" required/>
				</div>	
					<div class="col-sm-4 form-group">
					<label>Zip</label>
					<input type="number" name="zip" placeholder="Enter Zip Code Here.." class="form-control" required/>
				</div>		
			
			</div>					
						

	<div class="row">
	<div class="col-sm-6 form-group">
			<label>Phone Number</label>
						<input type="tel" name="phnum" placeholder="Enter Phone Number Here.." class="form-control" required/>
	</div>		
	</div>	
					
		<!-- --- Add your Favorite Sport -- -->	
		<div class="row">
		<div class="col-sm-6 form-group">
		
		<label>Pick any 3 of your favourite sport </label></br>
		<form id="game" name="game">
		<input type="checkbox" id="sport1" class="tennis"/> Tennis 
		<select name="tennis" id="dd1">
		<option value="" selected="selected">Select</option>
		<option value="Amateur">Amateur</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Professional">Professional</option>
		</select> <br /> 
		<input type="checkbox" id="sport1" class="basketball" /> Basketball
		<select name="basketball" id="dd2">
		<option value="">Select</option>
		<option value="Amateur">Amateur</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Professional">Professional</option>
		</select><br />
		<input type="checkbox" id="sport1" class="volleyball" /> Vollyball
		<select name="volleyball" id="dd3">
		<option value="">Select</option>
		<option value="Amateur">Amateur</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Professional">Professional</option>
		</select><br />
		<input type="checkbox" id="sport1" class="hiking"/> Hiking
		<select name="hiking" id="dd4">
		<option value="">Select</option>
		<option value="Amateur">Amateur</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Professional">Professional</option>
		</select><br />
		<input type="checkbox" id="sport1" class="swimming"/> Swimming
		<select name="swimming" id="dd5">
		<option value="">Select</option>
		<option value="Amateur">Amateur</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Professional">Professional</option>
		</select><br />
		<input type="checkbox" id="sport1" class="soccer"/> Soccer
		<select name="soccer" id="dd6" disabled>
		<option value="">Select</option>
		<option value="Amateur">Amateur</option>
		<option value="Intermediate">Intermediate</option>
		<option value="Professional">Professional</option>
		</select><br />
		
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

//pending closing statement from header.php
 </script>
	
			<div class="row">
					
				<div class="col-sm-6 form-group">
					<label>Email ID</label>
						<input type="email" id="email" name="email" placeholder="Enter Email ID Here.." class="form-control" required/>
				</div>		
							
			</div>	
						
			<div class="row">
							
				<div class="col-sm-6 form-group">
					<label>Password</label>
						<input type="password" id="password" name="password" placeholder="Enter Password Here.." class="form-control" required/>
							<p class="help-block">Password should be at least 4 characters</p>
				</div>		
			</div>	

						
			<div class="row">
							
				<div class="col-sm-6 form-group">
					<label>Confirm Password</label>
						<input type="password" id="password_confirm" name="password_confirm" placeholder="Enter Password Here.." class="form-control" required/>
							<p class="help-block">Please confirm password</p>
				</div>		
							
			</div>
			<!-- Button -->

		<div class="row">
		<div class="col-sm-6 form-group">					
			 <div class="controls">	
				 			 
				<a href="home.html" <button class="btn btn-danger">Go Back</button> </a>
				 <button name="submit_btn" class="btn btn-success" value="Sign UP">Submit</button>
				 <!-- <input name="submit_btn" type="submit" id="signup_btn" value="Sign UP" class="btn btn-success" /><br>-->
			</div>

		</div>
        </div>
			 </div>
	      	 </div>
			 </div>
			 
</form>
	
	<footer>
        	<p class="footertext">Copyright 2017-2018 </p>
    </footer>
		
	</div>
	
	<!-- Login section modal dialog box -->
	<div id="id01" class="modal">
  
  <!--<form class="modal-content animate" action="/action_page.php">-->
  <form class="modal-content animate" action="includes/login-inc.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container-here">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required></br>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required></br>
        
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
