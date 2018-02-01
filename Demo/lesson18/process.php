<?php
setcookie("name", $_POST['firstName']);
setcookie("email",$_POST['email']);

$name = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
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
            Votre nom est : <?php echo $name; ?><br>
            Votre email est : <?php echo $email; ?>
        </div>
        
        <article>
            Si ces infos sont correctes cliquez sur le boutton pour continuer!
            
            <form action="contain.php" method="POST">
                <input type="hidden" name="name" value="<?php echo $name;?>">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="submit" name="envoyer" value="Continuer">
            </form>
        </article>
    </body>
</html>
