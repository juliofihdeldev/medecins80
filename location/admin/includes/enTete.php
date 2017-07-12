<?php
	$title = "GRA| Location de voiture";
	echo '

	<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8" />
			<title>'.$title .'</title>
			<link rel="icon" type="image/ico" href="images/logorent.jpg" />
			<link rel="stylesheet" href="css/design.css" />
			<script src="js/jquery.js"></script>
			<script src="js/carousel.js"></script>
		</head>
		<body>
		
		<div id="enTete">
			<div class="content">
				<div class="media">
					<div class="item">
						<img style="width:45%;margin-top:13px;opacity:0.7;" src="images/i_g.png" />
					</div>
					<div class="item">
						<img style="width:90%;margin-top:3px;opacity:0.7;" src="images/t_g.png" />
					</div>
					<div class="item">
						<img style="width:55%;margin-top:10px;" src="images/f_g.png" />
					</div>
					<div class="cont">
						<strong>Call Us:</strong> +509 37036770 | Email : <a class="mailto" href="mailto:contact@gra-haiti.com">contact@gra-haiti.com</a>
					</div>
				</div>
			</div>
		</div>
	<div id="menu">
		<div class="content">
			<div class="link">';
					echo '
					<a href="index.php">
						<div class="item active">
							Home
						</div>
					</a>
					<a href="aboutus.php">
						<div class="item">
							About us
						</div>
					</a>
					<a href="contact.php">
						<div class="item">
							Contact
						</div>
					</a>
					<div class="search">
						<img src="images/loupe.png" />
					</div>
			</div>
			<div class="logo">
				<a href="index.php"><img src="images/logorent.jpg" /></a>
			</div>
		</div>
		<div id="searchDiv">
			<div class="content">
				<input type="text" name="search" placeholder="Type To Search About a Car" />
			</div>
		</div>
	</div>
	';
	/* 	<img class="close" src="images/token_x.png" /> */
?>