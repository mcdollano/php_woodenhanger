					<!-- DROPDOWN FUNCTION  -->

<?php
function create_dropdown($name,$option)
	{
		echo "<select name='$name'>";
		echo "<option value='All'>All</option>";
		foreach ($option as $value) {
		if(isset($_POST[$name]) && $_POST[$name] == $value)
		echo "<option selected value='$value'>$value</option>";
			else
		echo "<option value='$value'>$value</option>";
					}
		echo "</select> ";
		echo "<input type = 'submit' name='submit' value='Search'>";
	}
?>
					<!-- CHANGE PASSWORD FUNCTION -->
<?php
	if(isset($_POST['submit2'])) {
		$string = file_get_contents("users.json");
		if ($string) 
			$users = json_decode($string, true);
		// echo $string;
		$username = $_POST['username'];
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$pw2 = $_POST['pw2'];

		$index;

		foreach ($users as $key => $value) {
			if($value['username'] == $username && $value['password'] == $old_password && $new_password == $pw2) {

				echo "Password Changed Successfully!" . "<br>";
				echo "Your new Password is: " . $new_password . "<br>";

				$index = $key ;
				// echo $index;

				// echo $index . "<br>";
				// echo $old_password;
			}
		}
		$users[$index]['password'] = $new_password;
		$fp = fopen('users.json', 'w');
		fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
		fclose($fp);
} //isset
?>
							<!-- LOG IN FUNCTION -->
<?php
		if(isset($_POST['login'])){ 

			$string = file_get_contents('users.json');
			$users = json_decode($string, true);
			$err_msg = "";
			$username = $_POST['username'];
			$password = $_POST['password'];
			foreach ($users as $user) {
				if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password'])
			{
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['firstname'] = $user['firstname'];

				header('location:index.php');
			}
			elseif ($_POST['username'] != $user['username'] && $_POST['password'] != $user['password']) {
			 	$err_msg = "Log in Failed";
			}
		} echo $err_msg;
	}
?>
					<!-- REGISTER -->
<?php
$string = file_get_contents('users.json');
	$users = json_decode($string, true);

	if(isset($_POST['register'])) {
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


