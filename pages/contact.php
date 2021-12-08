<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Basement - Contact</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/icon2.jfif" />
	<link rel="stylesheet" href="../lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">	
	

	<script type="text/javascript" src="../lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<!-- Header -->
	<?php 
		include_once "../layout/header.php";
	?>

	<!-- Body -->
	<main>
		<!-- navbar-left -->
		<?php 
			include_once "../layout/navbar-left.php";
		?>

		<!-- Contact -->
		<section id="contact">
			<h2>Contact</h2>
			<form action="../submit-contact-form.php" method="POST">
				<label>
					<div>
						<span>Name:</span>
					</div>
					<input type="text" name="username" value="" required>
				</label>
				<br>
				<label>
					<div>
						<span>Age:</span>
					</div>
					<input type="number" name="age" value="" max="80" min="12" required>
				</label>
				<br>
				<label>
					<div>
						<span>Phone number:</span>
					</div>
					<input type="text" name="phone" value="" id="mobile" required>
				</label>
				<br>
				<label>
					<div>
						<span>Email:</span>
					</div>
					<input type="email" name="email" value="" required>
				</label>
				<br>
				<label>
					<div>
						<span>Content:</span>
					</div>
					<br>
					<textarea name="content" id="" cols="30" rows="5" required></textarea>
				</label>
				<br>
				<button type="submit" class="check">Send</button>
			</form>
		</section>
	</main>

	<!-- Footer -->
	<?php  
		include_once "../layout/footer.php"
	?>
</body>
</html>