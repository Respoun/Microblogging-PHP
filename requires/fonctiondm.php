<?php

//démarrage de la session 

session_start();

//

function index() {
    if(isConnected()) {
        $location = "profildm.php";
    } 
    else {
        $location = "logindm.php";
    }
    header("Location: " . $location);
    exit();
}

//

function login() {
    if(isset($_POST["pseudo"])) {
        $_SESSION["pseudo"] = $_POST["pseudo"];
        exit();
    }
    if(isset($_POST["pass"])) {
        $_SESSION["pass"] = $_POST["pass"];
        header("Location: profildm.php");
        exit();
    }
}

// Récupératon pseudo et mots de passe (avec un password_hash pour la sécurité)

if(isset($_POST['pseudo'])&isset($_POST['pass'])) {

$pseudo = $_POST['pseudo'];

$pass = $_POST['pass'];

$bdd = new PDO('mysql:host=localhost;dbname=dm1;charset=utf8', 'root', '');

$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

$req = $bdd->prepare('INSERT INTO membres(pseudo, pass) VALUES(:pseudo, :pass)');

$req->execute(array( 

    'pseudo' => $pseudo,

    'pass' => $pass_hache,));
    
}

// fin fonction récupération des pseudos et mot de passe 



//Assure la connection de l'utilisateur
function isConnected() {
    return isset($_SESSION["pseudo"]);
}

function getUser() {
    return isConnected() ? $_SESSION["pseudo"] : false;
}


?>