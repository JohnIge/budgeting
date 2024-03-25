<?php
session_start();

include_once('incl/config.php');

if (isset($_POST['submit'])) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	$query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";

	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);

	if ($numrows > 0) {

		$name = $row['Name'];
		$user = $row['Username'];
		$role = $row['Role'];

		$_SESSION['name'] = $name;
		$_SESSION['user'] = $user;
		$_SESSION['role'] = $role;

		if ($role == 'Admin') {

			header("location: ../applicant/admin.php");
		} elseif ($role == 'Department Head') {

			header("location: ../dhead/user.php");
		} elseif ($role == 'Manager') {

			header("location: ../new/manager/user.php");
		}
	} else {
		echo '<p class="error-message">Wrong Entry <a href="login.php">Try Again</a></p>';
		exit;
	}
} else {

?>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ABB - Login</title>

		<!-- <link rel="stylesheet" href="style.css"> -->
		<link rel="stylesheet" href="new.css">

		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	</head>

	<body>
		<div class="form-holder">
			<section class="form">
				<div class="form-heading">
					<h3>Login</h3>
				</div>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="first-form">
					<div class="">
						<span>Username</span>
						<input type="text" placeholder="Username" name="username">
					</div>
					<div class="">
						<div class="block">
							<span>Password</span>
							<input type="password" placeholder="Password" name="password">
						</div>
					</div>
					<input type="submit" name="submit" value="Login">
				</form>
			</section>
		</div>
	</body>

	</html>
<?php
}
?>