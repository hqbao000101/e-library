<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Basement - Us</title>
	<link rel="shortcut icon" type="image/x-icon" href="../imgs/icon2.jfif" />
	<link rel="stylesheet" href="../lib/bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">	
	

	<script type="text/javascript" src="../lib/jquery/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../lib/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="../style/about.css">
</head>
<body>
	<!-- Navigation -->
	<div id="navigate">
		<div id="header-left">
			<a href="dashboard.php"><img src="../imgs/header-logo_v3.png" alt="No image here!"></a>
		</div>
		<div id="header-right">
			<ul>
				<li>
					<i class="fas fa-eye"></i>
					<a href="#intro">Introduction</a>
				</li>
				<li>
					<i class="fas fa-heartbeat"></i>
					<a href="#motivation">Inspiration</a>
				</li>
				<li>
					<i class="fas fa-people-arrows"></i>
					<a href="#members">Member</a>
				</li>
				<li>
					<i class="fas fa-handshake"></i>
					<a href="#Environment">Environment</a>
				</li>
				<li>
					<i class="fas fa-reply-all"></i>
					<a href="dashboard.php">BookBasement</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- Header -->
	<header>
		<div class="text-center">
			<h1>Book Basement</h1>
			<div>
				<p class="text-center">Gain your knowledge <br> Reach to a new world...</p>
			</div>
		</div>
	</header>

	<!-- Body -->
	<main>
		<!-- introduction -->
		<section id="intro">
			<h3 class="text-center">Introduction</h3>
			<hr>
			<div id="intro-content">
				<div class="flex-items">
					<img src="../imgs/main-page.png" alt="">
				</div>
				<div class="flex-items">
					<p>Base on the project our group chose in the beginning of the SE course, this "BookBasement" is like an electronic library where you guys can search and find out some basic information about the books you love...</p>
				</div>
			</div>
		</section>

		<!-- motivation -->
		<section id="motivation">
			<h3 class="text-center">Inspiration</h3>
			<hr>
			<div id="body">
				<div class="container">
					<div class="card">
						<div class="imgBx" data-text="Albert Einstein">
							<img src="../imgs/Albert_einstein.png" alt="">
						</div>
						<div class="content">
							<div>
								<h3>Albert Einstein</h3>
								<p>" Any man who reads too much and uses his own brain too little falls into lazy habits of thinking "</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="imgBx" data-text="Mark Twain">
							<img src="../imgs/mark_twain.png" alt="">
						</div>
						<div class="content">
							<div>
								<h3>Mark Twain</h3>
								<p>" A person who won’t read has no advantage over one who can’t read "</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="imgBx" data-text="Ralph Waldo Emerson">
							<img src="../imgs/ralph_waldo_emerson.png" alt="">
						</div>
						<div class="content">
							<div>
								<h3>Ralph Waldo Emerson</h3>
								<p>" Nature and books belong to the eyes that see them "</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="imgBx" data-text="Victor Hugo">
							<img src="../imgs/victor_hugo.png" alt="">
						</div>
						<div class="content">
							<div>
								<h3>Victor Hugo</h3>
								<p>" It is from books that wise people derive consolation in the troubles of life "</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- team members -->
		<section id="members">
			<h3 class="text-center">Team members</h3>
			<hr>
			<div id="member-wrapper">
				<div class="container">
					<!-- member 01 -->
					<div class="card">
						<div class="box box1">
							<div class="content">
								<h2>01</h2>
								<h3>Nguyễn Mạnh Phong</h3>
								<p>He leads people and makes sure a project is carried through.Besides that, he engages the team, motivating them, taking care of their needs and maintaining a friendly and productive work environment.</p>
								<a href="">Leader & Designer</a>
							</div>
						</div>
					</div>
					<!-- member 02 -->
					<div class="card">
						<div class="box box2">
							<div class="content">
								<h2>02</h2>
								<h3>Võ Tiến Khoa</h3>
								<p>He focuses on the visual layout, user interface/interaction, and user experience.By the way, he creates components and features that are directly accessed by a user through the front-end of a website.</p>
								<a href="">Front-dev</a>
							</div>
						</div>
					</div>
					<!-- member 03 -->
					<div class="card">
						<div class="box box3">
							<div class="content">
								<h2>03</h2>
								<h3>Huỳnh Quang Bảo</h3>
								<p>He builds and maintains the technology needed to power the components which enable the user-facing side of the website to exist ( core application logic, databases, application integration, API,...).</p>
								<a href="">Back-dev</a>
							</div>
						</div>
					</div>
					<!-- member 04 -->
					<div class="card">
						<div class="box box4">
							<div class="content">
								<h2>04</h2>
								<h3>Nguyễn Đình Anh Hào</h3>
								<p>He conducts both manual and automated tests of software products as well as shares their expertise and knowledge to help businesses attain goals and solve problems.</p>
								<a href="">Tester & Consultant</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Social media -->
		<section id="Environment">
			<h3 class="text-center">Environment</h3>
			<hr>
			<div id="media">			
				<div class="sm">
					<a href="#Environment"><i class="fab fa-facebook-messenger"></i></a>
					<a href="#Environment"><i class="fab fa-discord"></i></a>
					<a href="#Environment"><i class="fab fa-git-alt"></i></a>
					<a href="#Environment"><i class="fab fa-github"></i></a>
					<a href="#Environment"><i class="fas fa-terminal"></i></a>
					<a href="#Environment"><i class="fas fa-laptop-code"></i></a>
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