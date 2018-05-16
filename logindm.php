<?php require_once('requires/fonctiondm.php') ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="requires/stylesdm.css" media="all" />
		<h1>Bienvenue sur ce site</h1>
		<h2>Inscrivez-vous !  </h2>
		<form method="POST" action="logindm.php">
		    <label for="pseudo">Pseudo :
		        <input type="text" name="pseudo" id="pseudo" />
		    </label>
		    <label for="pass">Mot de Passe :
		        <input type="text" name="pass" id="pass" />
		    </label>
		    <div id="bouton">
		    	<input type="submit" value="Inscription" />
		    </div>
		    <div>
		    	<input type="button" value="Continuer" onClick="javascript:document.location.href='profildm.php'" />
		    </div>
		</form>
	</body>
</html>
	
<?php require_once('requires/fonctiondm.php') ?>