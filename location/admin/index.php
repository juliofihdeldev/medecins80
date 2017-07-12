<?php
	include("php/c.php");
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
		
		<div class="formConnect">
			<div class="log">
				<img src="images/logorent.jpg">
			</div>
			<form method="" action="" id="formLog">
				<input class="input" type="text" name="surnom" placeholder="* Votre username" />
				<input class="input" type="email" name="email" placeholder="* Votre password:" />
				<input class="submit" type="submit" value="Connect" />
				<input class="cancel" type="submit" value="Cancel" />
			</form>
		</div>
	';
?>
	<script src="js/main.js"></script>
	</body>
</html>