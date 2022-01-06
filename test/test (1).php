<! DOCTYPE html>

<html>

	<head>
		
	</head>
	
	<body id='main'>
		<form method='post' action='resume_fm_test.php'>
			<input type='text' name='prenom' id='prenom' value='prenom'/>
			<input type='text' name='nom' id='nom' value='nom'/>
			<input type='number' name='age' id='age' value='70' /></br>
			<input type='submit' value='OK'>
		</form>
		
		<form method='post' action='resume_fm_test.php' id='checkbox_test'>
			<input type='checkbox' name='diabete' id='diabete'  onchange='insertSomething()'/><label for='diabete'>Diabète (tous type)</label></br>
		</form>
		
		<p hidden>Ca marche</p>
		
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="jquery_test.js"></script>
	</body>
</html>
		
		