<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Basement - Detail</title>
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

		<!-- More details -->
		<section id="details">
			<h2>More detail</h2>
			<div class="detail-wrapper">
				<div class="flex-detail">
					<div>
						<img src="../imgs/sach-lang-lang-va-hanh-trinh-ngan-dam.gif" alt="">
					</div>
					<div id="left-image">
						<h3 id="detail-title">Journey of A Thousand Miles</h3>
						<div class="detail-list">
							<i class="fas fa-user-edit"></i>
							<span>Author:</span>
							<span>David Ritz</span>
						</div>
						<div class="detail-list">
							<i class="fas fa-tag"></i>
							<span>Genre:</span>
							<span>adventure + family</span>
						</div>
						<div class="detail-list">
							<i class="fas fa-info-circle"></i>
							<span>Status:</span>
							<button>Completed</button>
						</div>
						<div class="detail-list">
							<i class="fas fa-ruler-combined"></i>
							<span>Length:</span>
							<span>400 pages</span>
						</div>
						<div class="detail-list">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						
						<button><i class="fas fa-plus-circle"></i> Add to my list</button>
					</div>
				</div>
				<h3>Brief description</h3>
				<hr>
				<p>“Lang Lang & Journey of a Thousand Miles” is a dramatic story of a family who sacrificed everything: their parents' marriage, financial security, Lang Lang's childhood, and fame in the world. classical Chinese music – thanks to the boy's belief in his talent. The story reveals the intensely tense relationship between young Lang Lang and his father, who is willing to go anywhere to help his son become a star.
				<br><br>
				Right from the beginning of the story, “Number One” is mentioned many times, “is the catchphrase of my father, and also my mother, they keep repeating it over and over again. It's also the catchphrase of my parents' friends and their children." And in Lang Lang's childhood culture, being the best means having it all.
				<br><br>
				Together with David Ritz, co-author of several best-selling autobiographies, “Lang Lang & Journey of a Thousand Miles” is an inspiring story that helps readers feel and appreciate courage, as well as the the sacrifices necessary to achieve fame, about the price that parents and children themselves pay for the title "prodigy".
				<br><br>
				Some excerpts from the book: “I have always had a big dream. Sometimes I find my dreams too idealistic or too naive as I have always believed that we can improve this world by improving children's lives through music, but either way. Moreover, I always remind myself with Lao Tzu's maxim: " Every journey of a thousand miles must begin with the first small step..."</p>
				<h3>Comment</h3>
				<hr>
				<p style="padding-left: 10px; color: gray;">2 comments</p>
				<div class="detail-comment">
					<i class="fas fa-user-circle"></i>
					<p>I cried a lot when reading this book. Lang Lang - a Chinese boy - is a main character, and his path to become a famous pianist was so painful but very respectful</p>
				</div>
				<div class="detail-comment">
					<i class="fas fa-user-circle"></i>
					<p>At first, I hated the Dad in the story so much, but eventually I understand that all what he did is just for only one purpose: His son's future. This is really a moving book</p>
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