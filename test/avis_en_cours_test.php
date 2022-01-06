<!DOCTYPE html>

<html>
	<head>
		<meta charset='utf-8'/>
		<link rel='stylesheet' href='style.css'>
		<script type='text/java'></script>
		<title> Endocrino-log | Outils </title>
	</head>

	<body>
		<?php include('en_tete.php')?>
		
		<?php 
		try
		{
			$bdd= new PDO('mysql:host=localhost;port=3306;dbname=endocrinolog_db; charset=utf8', 'root', 'root');
		}
		catch (Exception $e)
		{
				die('Erreur: '. $e->getMessage());
		}
		
		$req = $bdd -> query('SELECT id, date_avis, nom, prenom, nom_demandeur FROM avis_en_cours');
		$donnees= $req -> fetch();
		?>
		
		<div>
			<table>
				
				<tr>
					<th>Id</th>
					<th> Date avis</th>
					<th>Nom demandeur</th>
					<th>Nom</th>
					<th> Prénom</th>
				</tr>
				
				<?php 
				while ($donnees = $req -> fetch())
				{
					$url='avis_en_cours_test.php?id='.$donnees["id"];
					echo $url;
					echo '<tr onclick="document.location=\''.$url.'\'">
							<td>'.$donnees["id"].'</td>
							<td>'.$donnees["date_avis"].'</td>
							<td>'.$donnees["nom_demandeur"].'</td>
							<td>'.$donnees["nom"].'</td>
							<td>'.$donnees["prenom"].'</td>
						</tr>'
					
				;}	
				?>
				
			
			</table>
			
		</div>
		
		<div>
		<?php
			
			$req=$bdd->query('SELECT id, date_avis, nom, prenom, nom_demandeur FROM avis_en_cours WHERE id='.$_GET["id"]);
			$resume=$req->fetch();
			echo $resume["prenom"],' ',$resume["nom"];
		?>	
		</div>
			
		
	</body>
	
</html>
		