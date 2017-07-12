<?php
	$title ="Description de la voiture";
	include("php/c.php");
	include("includes/enTete.php");
?>

	<body>
		<div id="lastest">
			<div class="content">
				<?php
					$art = $bdd->prepare("SELECT * FROM car WHERE ID_car = ? ");
					$art->execute(array(htmlspecialchars($_GET['article'])));
					$cnt = $art->rowCount();
					
					if($cnt > 0)
					{
						$a = $art->fetch();		
						$marque = "".$a['marque']."";
						echo '
						<div class="itemArt">
							<div class="pix">
								<div class="main">
									<img src="uploads/photos/'.$a['photocar'].'">
								</div>';
								/* $pix = $bdd->prepare("SELECT ID FROM pix_article WHERE id_article = ? LIMIT 1, 4");
								$pix->execute(array($a['ID']));
								$cnt = $pix->rowCount();
								
								if($cnt > 0)
								{
									while($p = $pix->fetch())
									{
										echo '
										<div class="countPix">
											'.Picture($p['ID']).'
										</div>';
									}
								} */
								echo '
							</div>
							<div class="info">
								<form id="addArticleForm" method="post">
									<div class="txt">
										<div class="name">
											'.$a['marque'].'
										</div>
										
										<div class="name">
											'.$a['modele'].'
											'.$a['annee'].'
										</div>
										<div class="pri">
											<span class=""> '.$a['prixLoc'].' US Per day</span>
										</div>
										<div class="cat">
											'.$a['desc'].'
										</div>
										<div class="cat">
											'.$a['etat'].'
										</div>
									</div>
							</div>
						</div>';
					}
					else
					{
						header("Location: index.php");
					}
					
					echo '
					<div class="title">
						<span class="bar">
							<span class="gras">Related</span> <span class="italic">Products</span>
						</span>
						<div class="bBar">
							.
						</div>
					</div>';
					$req = $bdd->prepare("SELECT * FROM car WHERE marque = ? ");
					$req->execute(array(htmlspecialchars($marque)));
					$cnt = $req->rowCount();
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
		<?php include("includes/piedPage.php");?>
		<script src="js/main.js"></script>
	</body>
</html>