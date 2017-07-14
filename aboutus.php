<?php
    include_once("header.php");
?>

<style>
		#carousel
		{
			height: 350px;
			overflow: hidden;
			background-color: rgba(234, 234, 234, 1);
			background-image: url("../images/loading.gif");
			background-repeat: no-repeat;
			background-position: center;
			display:;
			box-shadow:4px 2px 4px #333;
			z-index:1;
		}
		#about .content
		{
			position:relative;
			width: 100%;
			margin: auto;
			color: gray;
			text-align: center;
			line-height: 25px;
			font-family: Myriad Pro;
			margin-top:-300px;
			z-index:2;
			
		}
		
		#about .content  .textjulio
		{
			width: 80%;
			margin: auto;
			color: gray;
			text-align: center;
			line-height: 25px;
			font-size:15px;
			font-family: Myriad Pro;
			display:;
			
		}
		#about .content  .textjulio .sometext
		{
			margin: auto;
			
			height:400px;
			color: gray;
			text-align: left;
			line-height: 25px;
			font-size:17px;
			font-family:  Myriad pro;
			background:#fff;
			display:;
			padding:20px;
			margin-bottom:400px;
		}
		#about .content  .textjulio .sometext .titre
		{
			font-family: Myriad pro;
			font-size:19px;
			color:#336688;
		}

	</style>
		<!-- <?php include("includes/enTete.php");?>  -->
	
    
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
        <img class="img" src="images/medd.jpg" />
        <img class="img" src="images/med.jpg" />
        <img class="img" src="images/black.jpg" />

    </div>
		
		<div id="about">
			<div class="content">
				<div class="title">
					<span class="bar">
						<span class="gras">A PROPOS</span> <span class="italic">Medecins80</span>
					</span>
					<div class="bBar">
						.
					</div>
				</div>
				<div class="textjulio">
					<div class="sometext">
						<h2>Organisation médicale humanitaire à but non lucratif.</h2>
						<div class="titre"> <b>Mission :</b> </div>
						
						<div class="text">
							Donner des soins de meilleures qualités à des gens
							vulnérables et instaurer la sécurité sanitaire dans tout le pays.
						</div>
						
						<div class="titre">Vision : </div>
						<div class="text">
							 Contribuer à l’éradication des différentes pathologies 
							 les plus meurtrières en Haïti et rendre accessible les soin sanitaires.
						</div>
						<div class="titre">	Objectifs: </div>
						
						<div class="text">
							 Contribuer à l’éradication des différentes pathologies 
							 les plus meurtrières en Haïti et rendre accessible les soin sanitaires.
						</div>
						
						<ol>
							<li> Promouvoir la prévention et la vulgarisation des maladies.</li>
							<li> Dépistage globale pour les maladies à haute endémicité. </li>
							<li> Prise en charge efficace du patient a des coûts très réduits ou gratuits par des professionnels compétents.  </li>
							<li> Intégration des malades avec des pathologies chroniques ou incurables dans la société. </li>
							<li>Promouvoir la recherche clinique  </li>
						</ol>
					</p>
				</div>
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
				<div class="one_personne">
					
					<div class="client">
						<div class="pix">
							<img src="images/client.jpg" />
						</div>
						<div class="name">
							<strong>Jean Karc </strong><br /> 
						</div>
						
					</div>
					<div class="text">
						J'adore cette organisation ! Elle m'a permis de rester en vie , 
						J'adore cette organisation ! Elle m'a permis de rester en vie , 
					</div>
				</div>
				
				<div class="one_personne">
					
					<div class="client">
						<div class="pix">
							<img src="images/client.jpg" />
						</div>
						<div class="name">
							<strong>Jean Karc </strong><br /> 
						</div>
						
					</div>
					<div class="text">
						J'adore cette organisation ! Elle m'a permis de rester en vie , 
						J'adore cette organisation ! Elle m'a permis de rester en vie , 
					</div>
				</div>
				<div class="one_personne">	
					<div class="client">
						<div class="pix">
							<img src="images/client.jpg" />
						</div>
						<div class="name">
							<strong>Jean Karc </strong><br /> 
						</div>
						
					</div>
					<div class="text">
						J'adore cette organisation ! Elle m'a permis de rester en vie , 
						J'adore cette organisation ! Elle m'a permis de rester en vie , 
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
	<?php include_once ("footer.php");?> 
	
