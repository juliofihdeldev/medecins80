<?php
	include("php/c.php");
	include("includes/enTete.php");
 ?> 
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
		<div id="lastest">
			<div class="content">
				<div class="title">
					<span class="bar">
						<span class="gras">OUR</span> | <span class="italic">CAR</span>
					</span>
					<div style="margin-left: 210px;" class="bBar">
						.
					</div>
				</div>
				<?php
					$req = $bdd -> query ("SELECT * FROM car");
					if($req)
					{
						while($data = $req -> fetch())
						{
							echo'
							<a href="article.php?article='.$data['ID_car'].'">
								<div class="itemm">
									<div class="pix">
										<img src="uploads/photos/'.$data['photocar'].'"/>
									</div>
									<div class="prix">
										'.$data['prixLoc'].' $ us  Per day
									</div>
									<div class="info">
										<div class="txt">
											<div class="name">
												'.$data['marque'].' '.$data['modele'].'
											</div>
											<div class="cat">
												'.$data['annee'].'
											</div>
											<div class="desc">
												'.$data['desc'].'
											</div>
										</div>
										<div class="pri">
											'.$data['prixLoc'].' $ us Per day
										</div>
										<div class="opt">
											<div class="cart">
												&#9874;
											</div>
											Options
										</div>
									</div>
								</div>
							</a>';
						}
					}else
					{
						echo 'Vous devez ajouter des voitures';
					}
				?>
				
			</div>
		</div>
	
		<div id="what">
			<div class="content">
				<div class="title">
					<span class="bar">
						<span class="gras">Ce que nos clients  </span> <span class="italic">Disent</span>
					</span>
					<div class="bBar">
						.
					</div>
					<div class="min">
						Écoutons ce que nos clients  disent de nous
					</div>
				</div>
				<div class="text">
					J'adore cette entreprise! Je travail avec eux depuis 10 ans , j’ai jamais eu de Problème pour importer, exporter et douanée mes marchandises .Ne pouvait pas être plus heureux . Merci GRA Import Export & Customer Clearance
				</div>
				<div class="client">
					<div class="pix">
						<img src="images/client.jpg" />
					</div>
					<div class="name">
						<strong>Audige Reginal</strong><br /><span>Responsable logistique de tips</span>
					</div>
				</div>
			</div>
		</div>
	<?php include("includes/piedPage.php");?> 
	
	
	<script src="js/main.js"></script>
	</body>
</html>