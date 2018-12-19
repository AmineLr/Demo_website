<?php

function getChapters()
{
	try
	{
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'm1456m1456');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}



	$req = $bdd->query('SELECT id, chapitre, contenu, DATE_FORMAT(date_post, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM chapitre ORDER BY date_post DESC LIMIT 0, 5');
	$req->execute();
	
	return $req->fetchAll();
	

}