<?php

//on ouvre la session 

session_start();

// on récupére les informations de la table message 

try{
    
    $bdd = new PDO('mysql:host=localhost;dbname=dm1;charset=utf8', 'root', '');
}
catch(Exception $erreur){
        
        die('Erreur : '.$erreur->getMessage());
}

$recup = $bdd->query('SELECT * FROM message');

while ($donnees = $recup->fetch()){
	
?>  <div id="postes">   
    	<strong>ID:</strong> <?php echo $donnees['id'] . '<br />';?>
    	<strong>AUTEUR:</strong> <?php echo $donnees['auteur'] . '<br />';?>
    	<strong>MESSAGE:</strong> <?php echo $donnees['message'] . '<br />';?>
    	<strong>DATE:</strong> <?php echo $donnees['date_post'] . '<br />';?>
    	<br/>
    	<br/>
    </div>
<?php  
}

$recup->closeCursor();

//suppression de tout les posts. 

if(isset($_POST["suppr"])) {

$suppr = $_POST['suppr'];

$req2 = $bdd->query('TRUNCATE TABLE message');
}

?>
