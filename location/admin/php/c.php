<?php
/* 	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=lokonation', 'fihdel', 'fihdel11', $pdo_options);
		
		$time = $bdd->prepare("SET lc_time_names = ?");
		$time->execute(array('FR_fr'));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	} */

	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=grahaiti', 'root', '', $pdo_options);
		
		$time = $bdd->prepare("SET lc_time_names = ?");
		$time->execute(array('FR_fr'));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	} 
?>