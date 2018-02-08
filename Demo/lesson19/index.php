<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <article>
            <form action="process.php" method="POST">
                <p>
                    <label for="firstName">Nom : </label><input type="text" id="firstName" name="firstName" required>
                </p>
                <p>
                    <label for="email">Email : </label><input type="email" id="email" name="email" required>
                </p>
                <input type="submit" name="envoyer" value="Envoyer">
            </form>
        </article>
    </body>
</html>
