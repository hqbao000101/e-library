<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Basement - Upload</title>
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

		<!-- Upload -->
		<section id="upload_book">
			<h2>Upload book</h2>
			<form action="../submit-contact-form.php" method="POST">
				<label>
					<div>
						<span>Name:</span>
					</div>
					<input type="text" name="book_name" value="" required>
				</label>
				<br>
				<label>
					<div>
						<span>Image:</span>
					</div>
					<input type="file" name="img" value="" required>
				</label>
				<br>
				<label>
					<div>
						<span>Author:</span>
					</div>
					<input type="text" name="author_name" value="" required>
				</label>
				<br>
				<label>
					<div>
						<span>Length:</span>
					</div>
					<input type="text" name="length" value="" id="" required>
				</label>
				<br>
				<label>
					<div>
						<span>Pulication year:</span>
					</div>
					<input type="number" name="year" value="" min="1500" max="2020" step="1" required>
				</label>
				<br>
				<label id="genre_section">
					<div>
						<span>Genre:</span>
					</div>
					<input type="checkbox" id="genre1" name="genre" value="Horror">
					<label for="genre1"> Horror </label>
					<input type="checkbox" id="genre2" name="genre" value="Adventure">
					<label for="genre2"> Adventure </label>
					<input type="checkbox" id="genre3" name="genre" value="Science">
					<label for="genre3"> Science </label>
					<input type="checkbox" id="genre4" name="genre" value="Mystery">
					<label for="genre4"> Mystery </label>
					<input type="checkbox" id="genre5" name="genre" value="Romance">
					<label for="genre5"> Romance </label>
					<input type="checkbox" id="genre6" name="genre" value="Religious">
					<label for="genre6"> Religious </label>
					<input type="checkbox" id="genre7" name="genre" value="Family">
					<label for="genre7"> Family </label>
					<input type="checkbox" id="genre8" name="genre" value="Autobiography">
					<label for="genre8"> Autobiography </label>
				</label>
				<br>
				<label id="status_section">
					<div>
						<span>Status:</span>
					</div>
					<input type="radio" id="status1" name="status" value="updating">
					<label for="status1"> Updating </label><br>
					<input type="radio" id="status2" name="status" value="completed">
					<label for="status2"> Completed </label><br>
				</label>
				<br>
				<label>
					<div>
						<span>Description:</span>
					</div>
					<br>
					<textarea name="content" id="" cols="100" rows="10" required></textarea>
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