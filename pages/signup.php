<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Basement - Register</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/icon2.jfif" />
	<link rel="stylesheet" href="../lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">	
	

	<script type="text/javascript" src="../lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="../style/signin.css">
</head>
<body>
	<form action="dashboard.php" method="POST" id="signup">
		<div class="login-box">
			<img src="../imgs/banner_01_v2.jpg" alt="">
			<h1>Register</h1>
			<div style="clear: both; "></div>
			<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Username" name="user" value="" required>
			</div>

			<div class="textbox">
				<i class="fab fa-magento"></i>
				<input type="number" placeholder="Age" name="age" value="" class="age" required>
				<span class="age"></span>
			</div>

			<div class="textbox">
				<i class="fab fa-gratipay"></i>
				<input type="text" placeholder="Horror, Romantic, Science,..." name="user" value="" class="genre">
				<!-- <input type="checkbox" name="genre" value="1">Horror
				<input type="checkbox" name="genre" value="2">Adventure
				<input type="checkbox" name="genre" value="3">Science
				<input type="checkbox" name="genre" value="4">Mystery
				<input type = "checkbox" name= "genre" value="5">Romance
				<input type = "checkbox" name= "genre" value="6">Religious
				<input type = "checkbox" name= "genre" value="7">Family
				<input type = "checkbox" name= "genre" value="8">Autobiography -->
			</div>
			<span class="genre" class="alert-danger"></span>

			<div class="textbox">
				<i class="fas fa-lock"></i>
				<input id="pass" type="password" placeholder="Password" name="pass" value="" required>
			</div>

			<div class="textbox">
				<i class="fas fa-lock"></i>
				<input  id="repass" type="password" placeholder="Confirm the password" name="re-pass" value="" required>
			</div>
			<span id="checkPass" class="alert-danger"></span>
			<input type="submit" class="login-btn" name="" value="Sign Up">
		</div>
	</form>

	<script src="../js/functions.js"></script>
</body>
</html>