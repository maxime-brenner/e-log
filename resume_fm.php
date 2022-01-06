<!DOCTYPE html>

<html>

	<head>
			<meta charset='utf-8'>
			<link rel='stylesheet' href='style.css'>
			<title> Endocrino-log </title>
	</head>

	<body>
		
		<?php include('en_tete.php'); ?>
		
		<?php 
		try
		{
			$bdd= new PDO('mysql:host=localhost;port=3306;dbname=endocrinolog_db; charset=utf8', 'root', 'root');
		}
		catch (Exception $e)
		{
				die('Erreur: '. $e->getMessage());
		}
		
		$req=$bdd->prepare('INSERT INTO avis_en_cours(nom,prenom,ddn,nom_demandeur) VALUES(:nom, :prenom, :ddn, :nom_demandeur)');
		$req->execute(array(
			'nom'=>$_GET['nom'],
			'prenom'=>$_GET['prenom'],
			'ddn'=>$_GET['ddn'],
			'nom_demandeur'=>$_GET['demandeur']
			));
		?>	
		
		<div>
		
			<p>
				<?php foreach ($_GET as $cle => $element)
						{
							echo '['.$cle. '] vaut ' .$element.'</br>';
						}
				?>
			</p>
			<p>Prénom: <?php echo htmlspecialchars($_GET['prenom']); ?></p>
			<p>Nom: <?php echo htmlspecialchars($_GET['nom']); ?></p>
			<p>Date de naissance: <?php echo htmlspecialchars($_GET['ddn']); ?></p>
			<p>Nom demandeur: <?php echo htmlspecialchars($_GET['demandeur']); ?></p>
			<p>Lieu d'exercice: <?php echo htmlspecialchars($_GET['lieu_exercice']); ?></p>
			<p>Poids: <?php echo htmlspecialchars($_GET['poids']); ?></p>
			<p>Taille: <?php echo htmlspecialchars($_GET['taille']); ?></p>
			<p>IMC: <?php echo htmlspecialchars($_GET['imc']); ?></p>
			<p>Date de la demande: <?php echo (new \DateTime())->format('Y-m-d'); ?></p>
			<p>Type de diabète: <?php echo htmlspecialchars($_GET['type_diabete']); ?></p>
			
		</div>
		
	</body>
	
</html>