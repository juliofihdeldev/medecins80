<?php
include_once("admin/ajaxscripts/c.php");
include_once("admin/ajaxscripts/function.php");
echo'<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
		<title>Actualites | Medecins80</title>
		<link rel="icon" type="image/ico" href="images/logo.jpg" />
		<link rel="stylesheet" href="css/design.css" />
		<script src="js/jquery.js"></script>
		<script src="js/carousel.js"></script>
        <script src="js/main.js"></script>

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
					<strong>Call Us:</strong> +509 48188107 | Email : <a class="mailto" href="mailto:contact@gmedicins80.com">contact@medicins80.com</a>
				</div>
			</div>
		</div>
	</div>
	<div id="menu">
		<div class="content">
			<div class="link">
					<a href="index.php">
						<div class="item active">
							Accueil
						</div>
					</a>

					<a href="actualite.php">
						<div class="item">
							Actualités 
						</div>
					</a>
					 
					<a href="aboutus.php">
						<div class="item">
						A Propos <!-- Mission -> Vision -> Objectifs --> 
						</div>
					</a>

					<a href="service.html">
						<div class="item">
							Programmes
						</div>
					</a>
					
					<a href="comment_devenir_membres.html">
						<div class="item">
								Devenir membre 
						</div>
					</a>
				
					<a href="contact.html">
						<div class="item">
							Contact
						</div>
					</a>
					<a href="don.php">
						<div class="item">
							Faire un don
						</div>
					</a>
				
				<div class="search">
					<img src="images/loupe.png" />
				</div>
			</div>
			<div class="logo">
				<a href="index.php"> <img src="images/logo.jpg" /> </a>
			</div>
		</div>
	</div>
	<div id="searchDiv">
		<div class="content">
			<img class="close" src="images/token_x.png" />
			<input type="text" name="search" placeholder="Type To Search" />
		</div>
	</div>
';
?>