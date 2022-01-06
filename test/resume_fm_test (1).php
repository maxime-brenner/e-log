<!DOCTYPE html>

<html>

	<head>
			<meta charset='utf-8'>
			<link rel='stylesheet' href='style.css'>
			<script type='text/javascript' src='formulaire_dynamique.js'></script>
			<title> Endocrino-log </title>
	</head>

	<body>
	
	<?php 
	try
	{
		$bdd= new PDO('mysql:host=localhost;port=3307;dbname=endocrinolog_db; charset=utf8', 'root', 'root');
	}
	catch (Exception $e)
	{
			die('Erreur: '. $e->getMessage());
	}
	
	$req=$bdd->prepare('INSERT INTO avis_en_cours(nom,prenom) VALUES(:nom, :prenom)');
	$req->execute(array(
		'nom'=>$_POST['nom'],
		'prenom'=>$_POST['prenom']
		));
		
	?>	
		<div>
			<p>Prénom: <?php echo htmlspecialchars ($_POST['prenom']);?></p>
			<p>Nom: <?php echo htmlspecialchars ($_POST['nom']);?></p>
			<p>Age: <?php echo htmlspecialchars ($_POST['age']);?></p>
		</div>
		
	</body>
	
</html>