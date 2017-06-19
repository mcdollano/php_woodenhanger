	<?php
	function get_title(){
		echo "Log In Page";
	}

	function display_content(){
		
		// session_start();
		// $users = [
		// 	['username' => 'admin',
		// 	'password' => 'password',
		// 	'email' => 'admin@gmail.com',
		// 	'name' => 'admin'],
		// 	['username' => 'mark',
		// 	'password' => 'mark',
		// 	'email' => 'mark@gmail.com',
		// 	'name' => 'mark'],
		// 	['username' => 'pat',
		// 	'password' => 'pat',
		// 	'email' => 'pat@gmail.com',
		// 	'name' => 'pat'],
		// 	['username' => 'krimsy',
		// 	'password' => 'krimsy',
		// 	'email' => 'krimsy@gmail.com', 
		// 	'name' => 'krimsy']
		// ];

		// $string = file_get_contents('users.json');
		// $users = json_decode($string, true);

		// $fp = fopen('users.json', 'w');
		// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
		// fclose($fp);

	// 	if(isset($_POST['login'])){ 
	// 		$err_msg = "";
	// 		$username = $_POST['username'];
	// 		$password = $_POST['password'];
	// 		foreach ($users as $user) {
	// 			if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password'])
	// 		{
	// 			header('location:index.php');
	// 		}
	// 		elseif ($_POST['username'] != $user['username'] && $_POST['password'] != $user['password']) {
	// 		 	$err_msg = "Log in Failed";
	// 		}
	// 	} echo $err_msg;
	// }
		function display_users($arr) {
			foreach ($arr as $val) {
				$username = $val['username'];
				$password = $password['password'];

				echo "
				<div>
				$username<br>
				$password<br>
				</div>
				";
			}
		}

	?>
	<?php
	?>
		<h2 class="myaccount">MY ACCOUNT</h2>
		<div class="login-content">
			<div class=login>
				<h4>LOG IN</h4>
				<form method="POST">	
					<div class="login-container">
						<input type="text" class="loginkey" name="username" placeholder="Username">
					</div>
					<br>
					<div class="login-container">
						<input type="password" class="loginkey" name="password" placeholder="Password">
					</div>
					<br>
					<p>Forgot your Password?<br><a href="change_pw.php">Click Here!</a></p>
			
					<p>Don't have an account yet?<br><a href="register.php">Sign Up Here!</a></p>
					<input class="btn btn-primary" type="submit" name="login" value="Log In">

				</form>
			</div>
		</div>
	<?php

} //function display content
require_once('template.php');


	 ?>

	</body>
	</html>









	