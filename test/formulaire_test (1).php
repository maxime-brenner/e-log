<!DOCTYPE html>

<html>

	<head>
			<meta charset='utf-8'>
			<link rel='stylesheet' href='style.css'>
			<script type='text/javascript' src='formulaire_dynamique.js'></script>
			<title> Endocrino-log </title>
	</head>

	<body <!--onload='fmOptionsHidden()'-->
		
		<?php include('en_tete.php'); ?>
		
		<form methode='post' action='resume_fm_test.php'>
			
			<!--<div id='info_generale'>-->
				
				<label for='prenom'>Prénom</label>:<input type='text' name='prenom' id='prenom' />
				<label for='nom'>Nom</label>:<input type='text' name='nom' id='nom'/>
				<label for='ddn'>Date de naissance</label>:<input type='date' name='ddn' id='name'/></br>
				<label for='demandeur'>Nom demandeur</label>:<input type='text' name='demandeur' id='demandeur'/>
				<label for='lieu-exercice'>Lieu d'exercice</label>:<input type='text' name='lieu_exercice' id='lieu-exercice'/></br>
				<label for='poids'>Poids</label>:<input type='number' name='poids' id='poids' />
				<label for='taille'>Taille</label>:<input type='number' name='taille' id='taille'/>
				<label for='imc'>IMC</label>:<input type='text' name='imc' id='imc'/>
				
			<!--</div>-->	
			
			<div class='checkbox'>
				<p>Votre question concerne : </p>
				<input type='checkbox' name='diabete' id='diabete'  onchange="aff_diabetes()"/><label for='diabete'>Diabète (tous type)</label></br>
				<input type='checkbox' name='thyroide' id='thyroide' onchange="aff_thyroide()"/><label for='thyroide'>Thyroïde</label></br>
				<input type='checkbox' name='hypophyse' id='hypophyse' onchange="aff_hypophyse()"/><label for='hypophyse'>Hypophyse(anomalie biologique,exploration d'un nodule...)</label></br>
			</div>
			
			<div id='fm_diabete' hidden>
				<label for='hba1c'>Hba1C</label>:<input type='number' name='hba1c' id='hba1c' />
			</div></br>
			
			<div id='fm_thyroide' hidden>
				<label for='tsh'>TSH</label>:<input type='number' name='tsh' id='tsh' />
			</div></br>
			
			<div id='fm_hypophyse' hidden>
				<label for='prolactine'>Prolactine</label>:<input type='number' name='prolactine' id='prolactine' />
			</div>
			
			<div>
				<input type='submit' value='OK'/>
			</div>
			
			
			
		</form>
		
	</body>

</html>