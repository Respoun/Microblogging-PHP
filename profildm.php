
<?php

require('requires/messagedm.php')

?>


<!DOCTYPE html>
<html>
    <head>
        <title>VOTRE BLOG</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="requires/stylesdm.css" media="all" />
        <h1>
            Bienvenue sur votre profil ! 
        </h1>
        <div>
            <h2>
                Vos posts: 
            </h2>
        </div>

        <form method="POST" action="profildm.php">

            <p>
                <label for='auteur'>Entrez votre pseudo:</label><br/>
            </p>

            <textarea name="auteur" id="auteur"> </textarea>

            <p>
                <label for="post">Ecrivez un post:</label><br/>
            </p>

            <textarea name="post" id="post"></textarea>

            <div id="bouton">
                <input type="submit" value="post ton message ! " />
            </div>
        </form>
        <div id="tespost">
            <input type="button" value="Vos posts" onClick="javascript:document.location.href='postdm.php'" />
        </div>
    </body>
</html>


