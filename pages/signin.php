<?php  
	include_once "../connectDB.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Basement - Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/icon2.jfif" />
	<link rel="stylesheet" href="../lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">	
	

	<script type="text/javascript" src="../lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="../style/signin.css">
</head>
<body>
	<form action="dashboard.php" method="POST" id="signin">
		<div class="login-box">
			<img src="../imgs/banner_01_v2.jpg" alt="">
			<h1>Login</h1>
			<div style="clear: both; "></div>
			<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" id="signin-username" placeholder="Username" name="user" value="" required>
			</div>

			<div class="textbox">
				<i class="fas fa-lock"></i>
				<input type="password" id="signin-password" placeholder="Password" name="pass" value="" required>
			</div>
			<span id="checkInput" class="alert-danger"></span>
			<input type="submit" class="login-btn" name="" value="Sign In">
		</div>
	</form>

	<script src="../js/functions.js"></script>
</body>
</html>