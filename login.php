<?php
	// require_once 'lib/script.php';
	
	session_start();

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

	$string = file_get_contents('users.json');
	$users = json_decode($string, true);

	// $fp = fopen('users.json', 'w');
	// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	// fclose($fp);

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		foreach ($users as $user) {
			if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password'])
		{
			echo $users['username'] ." ".$users['password'] . "<br>";
			header('location:index.php');
		}
		else {
			echo "Log In Failed!";
			break;
			}
		}
	}

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

	require_once 'top.php';

?>
<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<title>Wooden Hanger PH</title>
</head>
<body>	
	<h2 class="myaccount">MY ACCOUNT</h2>
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
				<p>Don't have an account yet?<br><a href="register.php">Sign Up Here!</a></p>
				<input class="btn btn-primary" type="submit" name="login" value="Log In">

			</form>
		</div>
</body>
</html>






	