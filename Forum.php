<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Mon blog un peu naze</title>
		<link rel="strylesheet" href="style.css">
		<script src="script.js"></script>
	</head>

	<body>

		<header>
			<h1>Le blog du partage et de l'amour</h1>
		</header>

		<div>
			<?php
			
				$date=date("d-m-Y");
			
				if (isset($_POST['pseudo']) AND isset($_POST['titre']) AND isset($_POST['message']))  //on vérifie si le formulaire était rempli
				{
					if (empty($_COOKIE['titre_debut']))  //on vérifie si il n'y a pas de première publication
					{
						$_COOKIE['titre_debut'] = "Les derniers messages de la communauté :";
						$_COOKIE['pseudo1'] = "Message de ".htmlspecialchars($_POST['pseudo'])." le ".$date;
						$_COOKIE['titre1'] = htmlspecialchars($_POST['titre']);
						$_COOKIE['message1'] = htmlspecialchars($_POST['message']);
						$_COOKIE['checkpoint1'] = ' ';
					}
					else if (!empty($_COOKIE['checkpoint1']) AND empty($_COOKIE['checkpoint2']))  //on vérifie si il n'y a pas de seconde publication
					{
						$_COOKIE['pseudo2'] = "Message de ".htmlspecialchars($_POST['pseudo'])." le ".$date;
						$_COOKIE['titre2'] = htmlspecialchars($_POST['titre']);
						$_COOKIE['message2'] = htmlspecialchars($_POST['message']);
						$_COOKIE['checkpoint2'] = ' ';
					}
					else if (!empty($_COOKIE['checkpoint2']) AND empty($_COOKIE['checkpoint3']))  //on vérifie si il n'y a pas de troisième publication
					{
						$_COOKIE['pseudo3'] = "Message de ".htmlspecialchars($_POST['pseudo'])." le ".$date;
						$_COOKIE['titre3'] = htmlspecialchars($_POST['titre']);
						$_COOKIE['message3'] = htmlspecialchars($_POST['message']);
						$_COOKIE['checkpoint3'] = ' ';
					}
					else if (!empty($_COOKIE['checkpoint3']) AND empty($_COOKIE['checkpoint4']))  //on vérifie si il n'y a pas de quatrième publication
					{
						$_COOKIE['pseudo4'] = "Message de ".htmlspecialchars($_POST['pseudo'])." le ".$date;
						$_COOKIE['titre4'] = htmlspecialchars($_POST['titre']);
						$_COOKIE['message4'] = htmlspecialchars($_POST['message']);
						$_COOKIE['checkpoint4'] = ' ';
					}
					else if (!empty($_COOKIE['checkpoint4']) AND empty($_COOKIE['checkpoint5']))  //on vérifie si il n'y a pas de cinquième publication
					{
						$_COOKIE['pseudo5'] = "Message de ".htmlspecialchars($_POST['pseudo'])." le ".$date;
						$_COOKIE['titre5'] = htmlspecialchars($_POST['titre']);
						$_COOKIE['message5'] = htmlspecialchars($_POST['message']);
						$_COOKIE['checkpoint5'] = ' ';
					}
			
					echo implode("</br>",$_COOKIE);  //affichage des cookies en allant à la ligne à chaque fois
					
				}
					
			?>
		</div>
		
		//le formulaire à remplir
		<footer id="formu" >
			<p>Envie de partager quelque chose avec la communauté ?</p>
			<form action="#" method="POST" >
				<p>
					<label for="pseudo">Pseudo : </label><Input type="text" name="pseudo" />
				</p>
				<p>
					<label for="titre">Titre : </label><Input type="text" name="titre" />
				</p>
				<p>
					Votre message : <textarea name="message" placeholder="Votre message.">Nouveau message</textarea>
				</p>
				<p>
					<Input type="submit" value="Publier" />
				</p>
			</form>
		</footer>
		
	</body>

</html>