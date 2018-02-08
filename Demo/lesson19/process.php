<?php
session_start();
$_SESSION["name"] = $_POST['firstName'];
$_SESSION["email"] = $_POST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Process</title>
    </head>
    <body>
        <h1>Félicitation vous êtes enregistrés</h1>
        
        <div>
            Votre nom est : <?php echo $_SESSION["name"];?><br>
            Votre email est : <?php echo $_SESSION["email"];?>
        </div>
        
        <article>
            Si ces infos sont correctes cliquez sur le boutton pour continuer!
            
            <form action="contain.php" method="POST">
                <input type="submit" name="envoyer" value="Continuer">
            </form>
        </article>
    </body>
</html>
