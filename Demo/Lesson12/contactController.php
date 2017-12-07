<?php 
    $db = new PDO("mysql:host=localhost;dbname=Isuzu", "root", "root");
    $db->exec("set names utf8");
    
    $notification = '';
    $queryInsertIntoClients = "INSERT INTO clients (email, nom, prenom, telephone, commune, commentaire) "
            . "VALUES (?, ?, ?, ?, ?, ?)";
    
    $ps = $db->prepare($queryInsertIntoClients);
    $ps->bindValue(1, htmlentities($_POST["email"]));
    $ps->bindValue(2, htmlentities($_POST["firstName"]));
    $ps->bindValue(3, htmlentities($_POST["name"]));
    $ps->bindValue(4, htmlentities($_POST["phoneNumber"]));
    $ps->bindValue(5, htmlentities($_POST["town"]));
    $ps->bindValue(6, htmlentities($_POST["comment"]));
    
    $execute = $ps->execute();
    
    if($execute== true){
        $notification = "Vous avez bien envoyer votre commentaire.";
    }
    else{
        $notification = "Il y a eu une erreur lors de l'envoi de votre commentaire.";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Isuzu Ute Australia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="main">
        <header>
            <h1>Isuzu Ute Australia</h1>
            <ul>
                <li><a class="link" href="index.php"> Home</a></li>
                <li><a class="link" href="index.php">D-MAX</a></li>
                <li><a class="link" href="index.php">MU-X</a></li>
                <li><a class="link" href="contact.php">Contact</a></li>
            </ul>
        </header>
        
        <section>
            <?php echo $notification; ?>
            
            <form action="contact.php">
                <input type="submit" name="return" value="Retour">
            </form>          
        </section>
    </body>
</html>