<?php include"include/connection.php"?>
<?php session_start();?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Central Mess System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><strong>GIKI</strong></a>
					<img src="images\img2.png" alt="IMG">
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to Central GIKI Mess</h1>
					</header>

					<div class="flex ">

						<div>
							<span class="icon fa-user"></span>
							<h3>Admin</h3>
						</div>

						<div>
							<span class="icon fa-user"></span>
							<h3>Student</h3>
						</div>

						<div>
							<span class="icon fa-user"></span>
							<h3>Mess Staff</h3>
						</div>

					</div>

					<footer>
						<a href="admin login.php" class="button">Admin login</a>
						<a href="student login.php" class="button">Student login</a>
						<a href="staff login.php" class="button">Staff login</a>
					</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>