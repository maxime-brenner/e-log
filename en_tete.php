


		
		<nav class='en_tete' >
			
			<a id='logo' href='site.php'>
				<img src='logo.png'>
			</a>
			
			<?php 
			try
			{
				$bdd= new PDO('mysql:host=localhost;port=3306;dbname=endocrinolog_db; charset=utf8', 'root', 'root');
			}
			catch (Exception $e)
			{
					die('Erreur: '. $e->getMessage());
			}
			
			$req=$bdd -> query('SELECT count(id) as nb_avis FROM avis_en_cours');
			$count=$req->fetch();
			$req->closeCursor();
			
			if (is_array($count))
			{
				$nb_avis=$count["nb_avis"];
				echo ('<p>Maxime, tu as <strong>'.$nb_avis.' </strong>avis en cours, bouge-toi!</p>');
			}
			
			
			
			?>
			
			
			<ul id='secondaire'>
				<li class='menu_secondaire'><a class='lien_menu' href='#'>A propos</a></li>
				<li class='menu_secondaire'><a class='lien_menu' href='#'>Contact</a></li>
			</ul>
	
		</nav>
		
		<nav class='barre_principale'>
		
			<ul id='principal'>
			
				<li class='menu'><a class='lien_menu' href='#'>Acceuil</a></li>
				<li class='menu'><a class='lien_menu' href='#'>Nouvelles</a></li>
				<li class='menu'><a class='lien_menu' href='#'>Pathologies</a></li>
				<li class='menu'><a class='lien_menu' href='#'>Outils</a>
					<ul class='sous'>	
						<li><a href='formulaire.php'>Formulaires</a></li>
						<li><a href='outils.php'>Outils pratiques</a></li>
						<li><a href='avis_en_cours.php'>Avis en cours</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		