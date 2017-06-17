<?php
require_once 'top.php';

$string = file_get_contents('users.json');
$users = json_decode($string, true);

if(isset($_POST['register'])){
	$new_user = [];

	$new_user['firstname'] = $_POST['firstname'];
	$new_user['lastname'] = $_POST['lastname'];
	$new_user['username'] = $_POST['usernameReg'];
	$new_user['password'] = $_POST['passwordReg'];

	$users[] = $new_user;

	$fp = fopen('users.json', 'w');
	fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	fclose($fp);
	// header('location:login.php');
}

if(isset($_POST['cancel']))
	header('location:login.php');

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

	<div class="register">
		<h4>REGISTER</h4>
		<form method="POST">
			<div class="register-container">
				<input type="text" class="firstname" name="firstname" placeholder="First Name">
			</div>
			<br>
			<div class="register-container">
				<input type="text" class="lastname" name="lastname" placeholder="Last Name">
			</div>
			<br>
			<div class="register-container">
				<input type="text" class="email" name="usernameReg" placeholder="Email Address">
			</div>
			<br>
			<div class="register-container">
				<input type="password" class="password" name="passwordReg" placeholder="Password">
			</div>
			<br>
			<div class="register-container">
				<input type="password" class="confirm-password" name="password" placeholder="Confirm Password">
			</div>
			<br>
			<input class="btn btn-primary" type="submit" name="register" value="Register">
			<a href="login.php"><input class="btn btn-default" type="submit" name="cancel" value="Cancel"></a>
		</form>
	</div>

</body>
</html>