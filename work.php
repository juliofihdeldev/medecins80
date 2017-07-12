<?php
	include("admin/phpscripts/connexion.php");
	include("admin/phpscripts/fonctions.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
		<title>GRA  | Import Export & Costums Clearance</title>
		<link rel="icon" type="image/ico" href="images/gralogo.jpg" />
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
					<strong>Call Us:</strong> +509 37036770 | Email : <a class="mailto" href="mailto:contact@gra-Haïti.com">contact@gra-Haïti.com</a>
				</div>
			</div>
		</div>
	</div>
	$menuAnglais="
	<div id="menu">
		<div class="content">
			<div class="link">
					<a href="index.html">
						<div class="item active">
							Home
						</div>
					</a>
					<a href="service.html">
						<div class="item">
							Services
						</div>
					</a>

					<a href="aboutus.html">
						<div class="item">
							About-us 
						</div>
					</a>
					<a href="contact.html">
						<div class="item">
							Contact
						</div>
					</a>
				
				<div class="search">
					<img src="images/loupe.png" />
				</div>
			</div>
			<div class="logo">
				<a href="index.php"><img src="images/gralogo.jpg" /></a>
			</div>
		</div>
	</div>
	
	<div id="searchDiv">
		<div class="content">
			<img class="close" src="images/token_x.png" />
			<input type="text" name="search" placeholder="Type To Search" />
		</div>
	</div>
	";
	$carousel="
		<div id="carousel">
			<!-- <?php
			/* 	$pix = $bdd->prepare("SELECT * FROM pix_site WHERE type = ?");
				$pix->execute(array("Slider"));
				
				while($p = $pix->fetch())
				{
					echo '
					<img class="img" src="images/'.$p['photo'].'" />';
				} */
			?> -->
			<img class="img" src="images/17Import-Export-Software.jpg" />
			<img class="img" src="images/sliderbg2.jpg" />
			<img class="img" src="images/banner.jpg" />
		</div>
		";
		$aboutAnglais="
		<div id="about">
			<div class="content">
				<div class="title">
					<span class="bar">
						<span class="gras">About</span> <span class="italic">GRA Import Export & Costums Clearance</span>
					</span>
					<div class="bBar">
						.
					</div>
				</div>
				<div class="textjulio">
					<p>
					
						GRA IMPORT EXPORT & Costums Clearance, founded in 2010 by <b>  Guerschom  RUBEN AIME </b> is one of the largest customs clearance service company in Haiti. Our experience of over 6 years guarantees a relationship of trust.
For 6 years our company offers the advantage of being able to adapt to each customer's needs and provide a complete service that only our company can offer .
						<a href="aboutus.html">Read more<a/>
					</p>
				</div>
				<!-- <?php
					/* echo '
					<p>';
						$txO = $bdd->prepare("SELECT ID, texte FROM text_site WHERE ID = ? AND statut = ?");
						$txO->execute(array("1", "Actif"));
						$cnt = $txO->rowCount();
						
						if($cnt > 0)
						{
							$t = $txO->fetch();
							
							echo $t['texte'];
						}
						else
						{
							echo '
							<div style="text-align:center;">Sorry, text missing</div>';
						}
						echo '
					</p>
					<div class="pix">
						'.Picture($t['ID'], "Text_Site").'
					</div>'; */
				?> -->
			</div>
		</div>";
		$welcomeAnglais="
		<div id="welcome">
			<div class="content">
				<div class="bag">
					<img src="images/19apie-mus-2.jpg" />
				</div>
				<div class="text">
					<div class="title">
						Welcome to GRA Import 	Export & Costums Clearance</div>
					<div class="title2">
						A company that takes care of your goods</div>
					<div class="bar">
						<div class="one">
							Services
						</div>
						<div class="two">
							100%
						</div>
					</div>
					<div class="bar">
						<div class="one">
							Import and Export
						</div>
						<div class="two">
							100%
						</div>
					</div>
					<div class="bar">
						<div class="one">
							Safe and fast Clearance
						</div>
						<div class="two">
							100%
						</div>
					</div>
					<div class="submit">
						<div class="cart">
							&#59197;
						</div>
						<a href="service.html">More about</a>
					</div>
				</div>
			</div>
		</div>
		";
		$infosAnglais="
		<div id="infos">
			<div class="body">
				<div class="content">
					<div class="item">
						<div class="pixOne">
							&#127912;
						</div>
						<div class="text">
							<div class="cntOne">1125</div>
							<div class="txt">Import</div>
						</div>
					</div>
					<div class="item">
						<div class="pixTwo">
							&#59197;
						</div>
						<div class="text">
							<div class="cntTwo">1560</div>
							<div class="txt">Export</div>
						</div>
					</div>
					<div class="item">
						<div class="pixThree">
							&#127758;
						</div>
						<div class="text">
							<div class="cntThree">2785</div>
							<div class="txt">Clearance</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		";
		$gregoryAnglais="
		<div id="gregory">
			<div class="content">
			
			
						<div class="pix">
							<img src="images/dedouane.jpg"/>
						</div>
						<div class="infos">
							<div class="title">
								<span class="bar">
									<span class="gras">Gra Import Export & Costums Clearance</span> <span class="italic">clearance</span>
								</span>
								<div class="bBar">
									.
								</div>
								<div class="min">
									Services
								</div>
								<div class="text">
									<span class="jaune">GRA Import Export & Costums Clearance</span>
									ou can turn fixed costs into variable costs by entrusting the administration of your customs procedures to GRA Import & Export Clearance Costums . We offer a full range of services related to customs formalities for export and import of a wide range of goods. We assure including customs clearance , import authorizations , TCA and declarations. Our customs experts have extensive knowledge of local conditions and regulations. 	<a href="servive.html"> Read more</a>
								</div>
							</div>
						</div>
				
			</div>
		</div>
		";
		$gregoryTwoAnglais="
		<div id="gregoryTwo">
			<div class="content">	
						<div class="pix">
							<img src="images/engagement_01.jpg"/>
						</div>
						<div class="text">
							<div class="title">Engage your business in Haiti</div>
											
							GRA Import & Export Clearance Costums is here to expand and grow your business but rewarding international trade is complicated. <br/> Through our consulting services export import , we reduce the risks , resources and financial commitment that your company would otherwise incur to successfully enter the Haitian market . <br/> Every company is unique with different needs and your international business solutions will reflect . GRA Import & Export Clearance Costums will work diligently to provide a comprehensive plan and international custom informative import and export in order to maximize your profits while creating long-term business relationships with clients in foreign markets. <a href="servive.html">Read more</a>

						</div>
			</div>
		</div>
		";
		$gregoryThreeAnglais="
		<div id="gregoryThree">
			<div class="content">
						
						<div class="pix">
							<img src="images/telecommunications.jpg"/>
						</div>
						<div class="text">
							<div class="title">
								Our specialty
							</div>
							<div class="txt">
								We work mainly with companies wishing cleared of communication equipment in their offant fast and reliable servives
							<ul>
								<li>Bts</li> 
								<li>PBX</li> 
								<li>Satelite dish </li>
								<li>Issuers </li>
								<li>The camera survellaince </li>

							</ul>
							</div>
						</div>
				
			</div>
		</div>
		";
		$whatAnglais="
		<div id="what">
			<div class="content">
				<div class="title">
					<span class="bar">
						<span class="gras">What our customers </span> <span class="italic">Sat</span>
					</span>
					<div class="bBar">
						.
					</div>
					<div class="min">
					Listen to what our customers say about us
					</div>
				</div>
				<div class="text">
					
I love this company! I work with them for 10 years , I never had problem to import, export and douanée my .Ne goods could not be happier. Thank you GRA Import & Export Clearance Costums
				</div>
				<div class="client">
					<div class="pix">
						<img src="images/client.jpg" />
					</div>
					<div class="name">
						<strong>Audige Reginal</strong><br /><span>Logistics Manager At Ericson INC</span>
					</div>
				</div>
			</div>
		</div>
		";
	<!-- 	<?php include("includes/piedPage.php");?> -->
	$contactAnglais="
	<div id="contact">
		<div class="content">
			<table>
				<tr>
					<td>
						<div class="item">
							<img class="logopied" src="images/gralogo.jpg" />
							<div class="txt">
								GRA Import Export & Costums Clearance is the best option for customs cleared goods
							</div>
							<span class="em"><em>Enjoy your design!</em></span>
							</div>
					</td>
					<td>
						<div class="item">
							<div class="titre">Company Information</div>
							<div class="it">
								<span class="square">▪</span> 
								<a href="aboutus.html"> About to GRA Import Export & Costums Clearance</a>
							</div>
							<div class="it">
								<span class="square">▪</span> 
								GRA Import Export & Costums Clearance
							</div>
							<div class="it">
								<span class="square">▪</span> 
								Privacy Policy
							</div>
						</div>
					</td>
					<td>
						<div class="item">
							<div class="titre">Newsletter</div>
							<label for="mail">Email adress</label><br />
							<input class="input" type="email" name="email" placeholder="Your email address" />
							<input class="submit" type="submit" value="Sign up" />
						</div>
					</td>
					<td>
						<div class="item">
							<div class="titre">Tags</div>
					
						<ul>
							<li>GRA | RENT -A- CAR </li>
							
						</ul>
						</div>
					</td>
				</tr>
			</table>
		</div>
		
		<div class="copyright">
			© Copyright '.date('Y').' - GRA Import Export & Costums Clearance | Design by <a href="www.fihdel.com">FIHDEL</a>
		</div>
	</div>
	
	<div id="modal">
		<div class="loading">
			<img src="images/loading.gif" /><br />
			Loading
		</div>
		<div class="alert">
			
		</div>
		<div class="shop">
			
		</div>
	</div>
	";
	$communicationAnglais="
		<div id="communication">
			<div class="content">
				<div class="body">
					<div class="form">
						<div class="titleOne">
							
Contact us!
						</div>
						<div class="titleTwo">
							
							
Fill out the contact form, and <em> GRA Import & Export Clearance Costums </ em> will reply within an hour
						</div>
						<input class="input" type="text" name="surnom" placeholder="* Name Surname:" />
						<input class="input" type="email" name="email" placeholder="* Email:" />
						<input class="input" type="text" name="company" placeholder="Company:" /><br />
						<input class="input" type="text" name="address" placeholder="* Address:" />
						<input class="input" type="text" name="phone" placeholder="* Phone Number:" />
						<input class="input" type="text" name="subject" placeholder="Subject:" /><br />
						<textarea class="textarea" placeholder="* Your Message:"></textarea>
						<input class="submit" type="submit" value="Send" />
					</div>
					<div class="infos">
						<div class="logo">
							<img src="images/gralogo.jpg" />
						</div>
						<div class="item">
							<div class="pix">
								&#8962;
							</div>
							<div class="text">
								<div class="one">Address</div>
								<div class="txt">
									Delmas 33 , rue Ambroise<br />
									Port au Prince,<br />
									Haïti
								</div>
							</div>
						</div>
						<div class="item">
							<div class="pix">
								&#128222;
							</div>
							<div class="text">
								<div class="one">Phone</div>
								<div class="txt">
									Phone : +509 37036770 
								</div>
							</div>
						</div>
						<div class="item">
							<div class="pix">
								&#9993;
							</div>
							<div class="text">
								<div class="one">Mail</div>
								<div class="txt">
									<a href="maito:contact@gra-Haïti.com">contact@gra-Haïti.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="social">
			<div class="content">
				<div class="title">
					<span class="bar">
						<span class="gras">Stay in touch with us via With</span> <span class="italic">social media </span>
					</span>
					<div class="bBar">
						.
					</div>
					<div class="min">
						Contact us by clicking on one of its links
					</div>
				</div>
				<div class="item">
					<div class="pixOne">
						<img src="images/facebook.png" />
					</div>
					<div class="txt">
						Facebook
					</div>
				</div>
				<div class="item">
					<div class="pixTwo">
						<img src="images/twitter.png" />
					</div>
					<div class="txt">
						Twitter
					</div>
				</div>
				<div class="item">
					<div class="pixThree">
						<img src="images/instagram.png" />
					</div>
					<div class="txt">
						Instagram
					</div>
				</div>
			</div>
		</div>
		";
	<script src="js/main.js"></script>
	</body>
</html>