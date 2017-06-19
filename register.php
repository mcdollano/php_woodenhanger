<?php
	function display_content(){
?>
<div class='register'>
	<h4>REGISTER</h4>	
	<form method='POST'>
		<div class='register-container'>
			<input type='text' class='firstname' name='firstname' placeholder='First Name'>		
		</div>	
		<br>	
		<div class='register-container'>	
			<input type='text' class='lastname' name='lastname' placeholder='Last Name'>			
		</div>
		<br>	
		<div class='register-container'>		
			<input type='text' class='email' name='usernameReg' placeholder='Email Address'>	
		</div>
		<br>		
		<div class='register-container'>		
			<input type='password' class='password' name='passwordReg' placeholder='Password'>			
		</div>	
		<br>
		<div class='register-container'>	
			<input type='password' class='confirm-password' name='password' placeholder='Confirm Password'>	
		</div>			
		<br>	
		<input class='btn btn-primary' type='submit' name='register' value='Register'>
		<a href='login.php'><input class='btn btn-default' type='submit' name='cancel' value='Cancel'></a>
	</form>
</div>						
<?php		
	} //display content
	require_once('template.php');

	function get_title(){
		echo "Register Page";
	}
?>

<?php
require_once 'partials/footer.php';
 ?>