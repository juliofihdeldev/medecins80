<?php
	include("c.php");
	if($_POST['w']=="newsletters")
	{
		if(isset($_POST['email'])AND !empty($_POST['email']))
		{
			$sel_news = $bdd -> prepare('SELECT * FROM newletter WHERE email_newletter = ?');
			$sel_news -> execute(array($_POST['email']));
			$verif_news_email = $sel_news->rowCount();
			if($verif_news_email>0)
			{
				echo'
					<table>
						<tr>
							<td>
								<img src="images/info_32px.png"/>
							</td>
						
							<td>
								Vous êtes déjà aborné avec
								<i>
								'.$_POST['email'].'
								</i>
							</td>
						</tr>
					</table>
				';
			}
			else
			{
				$insert_news = $bdd -> prepare('INSERT INTO newletter(email_newletter ,date_ajouter_news ) VALUES (?,now())');
				$insert_news -> execute(array($_POST['email']));
				$verif_news= $insert_news->rowCount();
				if($verif_news>0)
				{
					echo
					'
						<table>
							<tr>
								<td>
									<img src="images/info_32px.png"/>
								</td>
								</td>
									Vous venez de vous aborder avec 
									<br/>
									<i>
									'.$_POST['email'].'
									</i>
								</td>
							<tr>
						</table>
					';
		
					 // Plusieurs destinataires
					 $to  = $_POST['email'];

					 // Sujet
					 $subject = 'Remerciment';

					 // message
					 $message = '
					 <html>
					  <head>
					   <title>REMERCIEMENT</title>
					  </head>
					  <body>
						   <p> GRA Import Export  vous remercie de nous avoir suivre dans le 
						   news letter<br/>
						   </p>
						  Cliquer ici pour <a href="www.gra-haiti.com"> </a>
					  </body>
					 </html>
					 ';

					 // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
					 $headers  = 'MIME-Version: 1.0' . "\r\n";
					 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

					 // En-têtes additionnels
					 $headers .= 'To: Mary <infos@gra-haiti.com>, PRHA <infos@gra-haiti.com>' . "\r\n";
					 $headers .= 'From: REMERCIRMEMT <infos@gra-haiti.com>' . "\r\n";
					 $headers .= 'Cc: infos@gra-haiti.com' . "\r\n";
					 $headers .= 'Bcc: infos@gra-haiti.com' . "\r\n";

					 // Envoi
					 mail($to, $subject, $message, $headers);
				}
				else
				{
					
				}
			}
	
		}else
		{
			echo 'rien est poster';
		}
	}
	elseif($_POST['w']=="sendMessage")
	{
		// Plusieurs destinataires
		$to  = "infos@gra-haiti.com";
		// Sujet
		$subject = $_POST['subject'];
		// message
		$message = $_POST['yourMessage']; 
	
		// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// En-têtes additionnels
		$headers .= 'To: Mary <infos@gra-haiti.com>, PRHA <infos@gra-haiti.com>' . "\r\n";
		$headers .= 'From: REMERCIRMEMT <infos@gra-haiti.com>' . "\r\n";
		$headers .= 'Cc: infos@gra-haiti.com' . "\r\n";
		$headers .= 'Bcc: infos@gra-haiti.com' . "\r\n";

		// Envoi
		mail($to, $subject, $message, $headers);
		echo'
		<table>
			<tr>
				<td>
					<img src="images/info_32px.png"/>
				</td>
				</td>
					Votre email a été envoyé
				</td>
			<tr>
		</table>
		';
	}
	else
	{
		echo'w sendMessage non envoyer';
	}
?>