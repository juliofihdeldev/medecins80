<?php 
	session_start();

	if($_POST['w']== "connection"){
		
		include("c.php");
		$conn = $bdd->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
		$conn->execute(array(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password'])));
		$cnt = $conn->rowCount();
		
		if($cnt>0){
			$c = $conn->fetch();
			$_SESSION["ID"] = $c["ID"];
			$_SESSION["email"] = $c["email"];
			?>
			<script>
				$(".forget").hide();
			</script>
			<?php
		
		}else{
			
			echo'
				Verifiez vos parametres de connexion.	
			';
		}
		
	}
	if($_POST['w']== "ajouterActivites"){
		
		include("c.php");
	
		if(isset($_FILES['myFile']) AND $_FILES['myFile']['error'] == 0)
			{
				// Testons si le fichier n'est pas trop gros
				if ($_FILES['myFile']['size'] <= 30000000)
				{
					// Testons si l'extension est autorisée
					$infosfichier = pathinfo($_FILES['myFile']['name']);
					$extension_upload = $infosfichier['extension'];
					$extensions_autorisees = array('jpg', 'JPG', 'jpeg', 'JPEG', 'gif', 'GIF', 'png', 'PNG');
					if(in_array($extension_upload, $extensions_autorisees))
					{
						$timestamp = time();
						$pix = $timestamp.'_'.$_FILES['myFile']['name'];
						
						// On peut valider le fichier et le stocker définitivement
						if(move_uploaded_file($_FILES['myFile']['tmp_name'], '../img/uploads/'.$pix))
						{
							$photo= $pix;
						}
					}
					else
					{
						// Format
						echo 1;
					}
				}
				else
				{
					// Poids
					echo 2;
				}
			}
			else
			{
				// Pas de photo
				echo 3+" pas de phot";
			}
			
			$iUS = $bdd->prepare("INSERT INTO activites(id_users, titre, description,photo) VALUES(?, ?, ?,?)");
			$iUS->execute(array($_SESSION["ID"], 
			htmlspecialchars($_POST['titre']), 
			htmlspecialchars($_POST['description']),
			$pix));
			if($iUS){
				echo'Votre Activites a ete ajoutee';
				/* ?>
					<script>
						
					</script>
				<?php */
		}else{
			
			echo'
				error 	
			';
		}
		
	}

?>