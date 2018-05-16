<!DOCTYPE html>
<html>
    <head>
        <title>Tes Posts</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="requires/stylesdm.css" media="all" />
        <h1>Tes posts:</h1>
        <?php require('requires/fonctionpostdm.php') ?>
        	
        <form method="POST" action="postdm.php" name="suppr">
        	<div>
		    	<input type="submit" value="supprimer vos posts" name="suppr"/>
			</div>
		</form>
    </body>
</html>