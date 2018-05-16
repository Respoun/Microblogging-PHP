<?php 

//Récupération des messages, de l'auteur et de la date de publication et envoi dans la table 'message'

if(isset($_POST["auteur"])& isset($_POST["auteur"])){

$auteur = $_POST['auteur'];

$message = $_POST['post'];

$bdd = new PDO('mysql:host=localhost;dbname=dm1;charset=utf8', 'root', '');

$req1 = $bdd->prepare('INSERT INTO message(message, auteur, date_post) VALUES(?,?, NOW())');

$req1 -> execute(array($message, $auteur));

}

?>