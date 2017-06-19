<?php

function get_title(){
		echo "Change Password";
	}
function display_content(){

?>

<!-- <h2 class="myaccount">FORGOT PASSWORD</h2> -->
		<div class="login-content">
			<div class=login>
				<h4>CHANGE PASSWORD</h4>
				<form method="POST">	
					<div class="login-container">
						<input type="text" class="loginkey" name="username" placeholder="Username">
					</div>
					<br>
					<div class="login-container">
						<input type="password" class="loginkey" name="old_password" placeholder="Old Password">
					</div><br>
					<div class="login-container">
						<input type="password" class="loginkey" name="new_password" placeholder="New Password">
					</div>
					<div class="login-container">
					<br>
						<input type="password" class="loginkey" name="pw2" placeholder="Confirm Password">
					</div>

					<br>
								
					<p>Don't have an account yet?<br><a href="register.php">Sign Up Here!</a></p>
					<input class="btn btn-primary" type="submit" name="submit2" value="Change Password">
					<a href='login.php'><input class='btn btn-default' type='submit' name='cancel' value='Cancel'></a>


				</form>
			</div>
		</div>

<?php

} //display_content
require_once('template.php');

?>





