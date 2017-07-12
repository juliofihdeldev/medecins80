
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
		<title> Contact | GRA Import Export & Costums Clearance </title>
		<link rel="icon" type="image/ico" href="../images/gralogo.jpg" />
		<link rel="stylesheet" href="../css/design.css" />
		<script src="../js/jquery.js"></script>
		<script src="../js/carousel.js"></script>
	</head>
	<body>
	<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.995957213152!2d-72.302224!3d18.574220999999973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e70bd1f923c3%3A0x311d1f5e0147ae0c!2sEPSTEIN+RECYCLING!5e0!3m2!1sfr!2sht!4v1432235633560" width="100%" height="250" frameborder="0" style="border:0">
				
			</iframe>
	</div>
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
						<div class="item ">
							About-us 
						</div>
					</a>
					<a href="contact.php">
						<div class="item active">
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
session_start();
echo $_SESSION['carousel'];
echo $_SESSION['communicationAnglais'];
echo $_SESSION['contactAnglais'];
?>