<!DOCTYPE html>

<html>

	<head>
			<meta charset='utf-8'>
			<link rel='stylesheet' href='style.css'>
			<script type='text/javascript' src='C:\MAMP\htdocs\Endocrino-log\scripts\formulaire_dynamique.js'></script>
			<title> Endocrino-log </title>
	</head>

	<body onload='fmOptionsHidden()'>
		
		<?php include('en_tete.php'); ?>
		
		<form methode='post' action='resume_fm.php'>
			
			<div id='info_generale'>
				<h1>Informations générales</h1>
				<label for='prenom'>Prénom</label>:<input type='text' name='prenom' id='prenom'/>
				<label for='nom'>Nom</label>:<input type='text' name='nom' id='nom'/>
				<label for='ddn'>Date de naissance</label>:<input type='date' name='ddn' id='name'/></br>
				<label for='demandeur'>Nom demandeur</label>:<input type='text' name='demandeur' id='demandeur'/>
				<label for='lieu_exercice'>Lieu d'exercice</label>:<input type='text' name='lieu_exercice' id='lieu-exercice'/></br>
				<label for='mail_demandeur'>E-mail</label>:<input type='mail' name='email' id='email'/></br>
				<label for='telephone'>Numéro de téléphone</label>:<input type='number' name='telephone' id='telephone'/></br>
				<label for='poids'>Poids</label>:<input type='number' name='poids' id='poids' />
				<label for='taille'>Taille</label>:<input type='number' name='taille' id='taille'/>
				<label for='imc'>IMC</label>:<input type='text' name='imc' id='imc' />
				
				
			</div>
			
			<div class='checkbox'>
				<p>Votre question concerne : </p>
				<input type='checkbox' name='diabete' id='diabete'  onchange="aff_diabete()" onchange="insertSomething()"/><label for='diabete'>Diabète (tous type)</label></br>
				<input type='checkbox' name='thyroide' id='thyroide' onchange="aff_thyroide()"/><label for='thyroide'>Thyroïde</label></br>
				<input type='checkbox' name='obesite' id='obesite' onchange="aff_obesite()"/><label for='obesite'>Obésité</label></br>
				<input type='checkbox' name='gynecomastie' id='gynecomastie'/><label for='gynecomastie'> Gynécomastie</label></br>
				<input type='checkbox' name='hypophyse' id='hypophyse' onchange="aff_hypophyse()"/><label for='hypophyse'>Hypophyse(anomalie biologique,exploration d'un nodule...)</label></br>
				<input type='checkbox' name='surrenale' id='surrenale' onchange="aff_surrenale()"/><label for='surrenale'>Incidentalome surrénalien/Pathologie surrénalienne</label></br>
				<input type='checkbox' name='gondatrope' id='hypophyse' onchange="aff_gonatrope()"/><label for='gonadotrope'>Anomalie axe gonadotrope(homme et femme)</label></br>
			</div>
			
			<div id='fm_diabete' >
				<span>
					<h1>Diabète</h1>
					<p>Nature du problème: </p>
						<input type='checkbox' name='decouverte' id='decouverte' />:<label for='decouverte'>Découverte de diabète</label>
						<input type='checkbox' name='hyperglycemie' id='hyperglycemie' />:<label for='hyperglycemie'>Hyperglycémie</label>
						<input type='checkbox' name='hypoglycemie' id='hypoglycemie' />:<label for='hypoglycemie'>Hypoglycémie</label></br>

				<span>
					<label for='hba1c' id='titre'>Hba1C(la plus récente)</label>:<input type='number' name='hba1c' id='hba1c' /></br>
				</span>
				<span>
					<label for='anciennete' id='titre'>Ancienneté du diabète</label>:<input type='number' name='anciennete' id='anciennete' />
				</span>
				<span>
					<p>Type de diabète concerné: </p>
						<label for='dtun'>Diabète de type I</label>:<input type='radio' name='type_diabete' value='dtun' id='dtun' /></br>
						<label for='dtdeux'>Diabète de type II</label>:<input type='radio' name='type_diabete' value='dtdeux' id='dtdeux' /></br>
						<label for='dtsec'>Diabète secondaire(atteinte pancréatique...)</label>:<input type='radio' name='type_diabete' value='dtsec' id='dtsec' /></br>
						<label for='dtgen'>Diabète génétique</label>:<input type='radio' name='type_diabete' value='dtgen' id='dtgen' /></br>
						<label for='dtautre'>Autre type</label>:<input type='radio' name='type_diabete' value='dtautre' id='dtautre' /></br>
				</span>	
				<span>
					<p>Complications du diabète: </p>
						<label for='comp_cardio'>Atteinte coronaire</label>:<input type='checkbox' name='comp_cardio' id='comp_cardio' /></br>
						<label for='comp_retine'>Rétinopathie diabétique</label>:<input type='checkbox' name='comp_retine' id='comp_retine' /></br>
						<label for='comp_rein'>Microalbulinurie/Protéinurie, Insuffisance rénale</label>:<input type='checkbox' name='comp_rein' id='comp_rein' /></br>
						<label for='comp_podo'>Hypoesthésie, plaie de pied(en cours ou cicatrisée)</label>:<input type='checkbox' name='comp_podo' id='comp_podo' /></br>
				</span>	
				<span>
					<label for='traitementad' id='titre'>Traitement antidiabétique actuel:</label></br>
					<textarea name='traitementad' id='traitementad' rows='6' cols='35'></textarea>
				</span>
				<span>
					<p>Votre question en clair: </p>
						<textarea rows='6' cols='35'></textarea>
				</span>

			</div></br>
			
			<div id='fm_thyroide' >
				<span>
					<h1>Thyroïde</h1>
					<p>Nature du problème: </p>
						<input type='checkbox' name='nodule' id='nodule' />:<label for='nodule'>Nodule(découverte, suivi...)</label>
						<input type='checkbox' name='hyperthyroidie' id='hyperthyroidie' />:<label for='hyperthyroidie'>Bilan/Suivi d'hyperthyroïdie</label>
						<input type='checkbox' name='hypothyroidie' id='hypothyroidie' />:<label for='hypothyroidie'>Bilan/Suivi d'hypothyroïdie</label>
						<input type='checkbox' name='adaptation_th' id='adaptation_th' />:<label for='adaptation_th'>Adaptation thérapeutique</label></br>
				</span>
				<span>
					<label for='tsh'>TSH</label>:<input type='number' name='tsh' id='tsh' />
				</span>
			</div></br>

			<div id='fm_obesite'>
				<span>
					<h1>Obésité</h1>
					<label for='premiere_fois_chir_baria'>Première consultation pour ce motif ?</label>
						<label for='oui'>oui</label>:<input type='radio' name='chir_baria' id='oui' value='oui'> 
						<label for='non'>non</label>:<input type='radio' name='chir_baria' id='non' value='non'></br>
				</span>
				<span>
					
					<label for='chir_baria'> Souhait de chirurgie bariatrique ?</label>
						<label for='oui'>oui</label>:<input type='radio' name='chir_baria' id='oui' value='oui'> 
						<label for='non'>non</label>:<input type='radio' name='chir_baria' id='non' value='non'>
				</span>
			</div>
			
			<div id='fm_hypophyse' >
				<h1>Pathologie hypophysaire</h1>
				<label for='prolactine'>Prolactine</label>:<input type='number' name='prolactine' id='prolactine' />
			</div>
			
			<div id='fm_submit'>
				<input type='submit' value='OK' name='send'/>
			</div>
			
		</form>	
			
		
		
	</body>

</html>