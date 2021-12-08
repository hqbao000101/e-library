<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Basement - Account</title>
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

		<!-- Account information -->
		<section id="account">
			<div id="account-banner">
				<h2>Admin1 <span>#0001</span></h2>
				<img src="../imgs/bao.png" alt="Not available">
			</div>
			<h3>Info</h3>
			<hr>
			<div>
				<h5>Username: <span>Admin1</span></h5>
				<h5>Age: <span>20</span></h5>
				<h5>Creation date: <span>November 14<sup>th</sup></span></h5>
				<h5>Number of books: <span>7</span></h5>
				<h5>Favorite genres: <span>Science, Mystery, Autobiography</span></h5>
				<h5>Visited Books:</h5>
			</div>
			<div id="grid-wrapper">
				<div><img src="../imgs/cuoc_chien_cong_nghe_so.png" alt=""></div>
				<div><img src="../imgs/thay_lang.png" alt=""></div>
				<div><img src="../imgs/3_nguoi_thay_vi_dai.png" alt=""></div>
			</div>
		</section>
	</main>

	<!-- Footer -->
	<?php  
		include_once "../layout/footer.php"
	?>
</body>
</html>