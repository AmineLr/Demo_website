<!DOCTYPE html>
<html>
	<head>
		<title>Billet simple pour l'alaska</title>
		<meta charset="utf-8"/>
		<!-- <link href="style.css" rel="stylesheet" /> --> 

	</head>
	<body>
		<h2>Derniers épisodes sortis</h2>
		<!-- <p>Chapitres</p> -->
	<?php


	foreach ($chapitres as $chapitre )
	{

	?>
		<div class="chapter">
	  		<h3>
	  	      <?php echo htmlspecialchars($chapitre['chapitre']);?>
	  	      <em>le <?php echo $chapitre['date_creation_fr'];?></em>
	  		</h3>
   	
    	<?php

    		echo nl2br(htmlspecialchars($chapitre['contenu']));
    	?>
    		<a href="comments.php?id=<?= $chapitre['id'];?>"></br> Commentaires </a>
    		</br>

    		<button class="showComment" onclick="my_alert()">Voir le 1er commentaire</button>
    		
	<?php
	}
	?>
			<script src = "assets.js" type="text/javascript"></script>
	</body>
</html>
