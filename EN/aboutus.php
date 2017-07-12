
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
		<title> About-us | GRA Import Export & Costums Clearance </title>
		<link rel="icon" type="image/ico" href="../images/gralogo.jpg" />
		<link rel="stylesheet" href="../css/design.css" />
		<script src="../js/jquery.js"></script>
		<script src="../js/carousel.js"></script>
	</head>
	<body>
		
	<div id="enTete">
		<div class="content">
			<div class="media">
				<div class="item">
					<img style="width:45%;margin-top:13px;opacity:0.7;" src="../images/i_g.png" />
				</div>
				<div class="item">
					<img style="width:90%;margin-top:3px;opacity:0.7;" src="../images/t_g.png" />
				</div>
				<div class="item">
					<img style="width:55%;margin-top:10px;" src="../images/f_g.png" />
				</div>
				<div class="cont">
					<strong>Call Us:</strong> +509 37036770 | Email : <a class="mailto" href="mailto:contact@gra-Haïti.com">contact@gra-Haïti.com</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="menu">
		<div class="content">
			<div class="link">
					<a href="index.php">
						<div class="item">
							Home
						</div>
					</a>
					<a href="service.php">
						<div class="item">
							Services
						</div>
					</a>

					<a href="aboutus.php">
						<div class="item active">
							About-us 
						</div>
					</a>
					<a href="contact.php">
						<div class="item">
							Contact
						</div>
					</a>
				
				<div class="search">
					<img src="../images/loupe.png" />
				</div>
			</div>
			<div class="logo">
				<a href="index.php"><img src="../images/gralogo.jpg" /></a>
			</div>
		</div>
	</div>
	
	<div id="searchDiv">
		<div class="content">
			<img class="close" src="../images/token_x.png" />
			<input type="text" name="search" placeholder="Type To Search" />
		</div>
	</div>

<?php
$active = 
session_start();
echo $_SESSION['carousel'];
echo $_SESSION['aboutAnglais'];
echo $_SESSION['welcomeAnglais'];
echo $_SESSION['infosAnglais'];
echo $_SESSION['gregoryAnglais'];
echo $_SESSION['gregoryTwoAnglais'];
echo $_SESSION['gregoryThreeAnglais'];
echo $_SESSION['whatAnglais'];
echo $_SESSION['contactAnglais'];
?>