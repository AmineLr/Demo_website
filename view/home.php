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


		/* Voilà mon site , un blog pour un ecrivain qui souhaiterai poster mensuellement des chapitres de son ouvrage.
		
		 Il n'y a qu'un bouton utilisant js en essayant de faire plus compliqué pour le moment je faisais tout bugger (je suis novice en js)

		 Il ne contient pas non plus de CSS pour cela je vous laisse voir l'autre repo
		 en m'excusant pour ce commentaire un peu trop long */


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