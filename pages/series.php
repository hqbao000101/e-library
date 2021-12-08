<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Basement - Series</title>
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

		<!-- Content -->
		<section id="book-storage">
			<h2>Series</h2>
			<div id="grid-wrapper">
				<div class="grid-items">
					<div>
						<a href="detail.php"><img src="../imgs/rip.png" alt=""></a>
						<span>More details</span>
					</div>
					<h5>Rip</h5>
					<h6>Paul Sating</h6>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<div class="grid-items">
					<div>
						<a href="detail.php"><img src="../imgs/harry_potter.png" alt=""></a>
						<span>More details</span>
					</div>
					<h5>Harry Potter</h5>
					<h6>J. K. Rowling</h6>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
				<div class="grid-items">
					<div>
						<a href="detail.php"><img src="../imgs/dac_nhan_tam.png" alt=""></a>
						<span>More details</span>
					</div>
					<h5>Đắc nhân tâm</h5>
					<h6>Dale Carnegie</h6>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>
		</section>
	</main>

	<!-- Footer -->
	<?php  
		include_once "../layout/footer.php"
	?>
</body>
</html>