<header class="clearfix">
		  <div id="logo" class="pull-left">
			<a href="new_Home.php"><img src="img/logo.png" class="img-responsive" alt="Sports Partner Finder"></a>
      </div>
       	<?php
       	//adding a logout button when user is logged in else display sign in option
       	if(isset($_SESSION['u_id'])){
       		echo '<form action="includes/logout-inc.php" method="POST">
		       		<button type="submit" name="logout_btn" class="btn btn-primary pull-right" style="width:auto;">Logout</button>
		       	</form>';
       	}else{
       		echo '<div id="login-buttons" class="pull-right">
		        	<button onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;" class="btn btn-danger">Sign In</button>
					<a href="new_signup.php" class=" btn btn-success">Sign Up</a>
				</div>';
       	}
       	?>
 
	</header>