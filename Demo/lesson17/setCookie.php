<?php
if (!isset($_COOKIE['ville'])) {
    setcookie("ville", "bruxelles");
}
$ville = filter_input(INPUT_COOKIE, "ville", FILTER_SANITIZE_STRING);

if (!isset($_COOKIE['compteur'])) {
    $compteur = 1;
} else {
    $compteur = filter_input(INPUT_COOKIE, "compteur", FILTER_SANITIZE_NUMBER_INT) + 1;
}
setcookie("compteur", $compteur);


if (!isset($_COOKIE['panier'])) {
    if (isset($_POST['item'])) {
        $panier = $_POST['item'];
    }
} else {
    $panier = filter_input(INPUT_COOKIE, "panier", FILTER_SANITIZE_STRING) . " ; " . filter_input(INPUT_POST, "item", FILTER_SANITIZE_STRING);
}
if (isset($_POST['item'])) {
    setcookie("panier", $panier);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Set cookie</title>
    </head>
    <body>
        <p>La valeur du Cookie est de :  <?php echo $ville; ?></p>
        <p>Le site a été accédé : <?php echo $compteur; ?> fois.</p>



        <form action="setCookie.php" method="POST">

            <input type="text" name="item" required>
            <input type="submit" name="Valider" value="Valider">

        </form>
        <?php if (isset($panier)) { ?>
            <p>Items se trouvants dans le panier : <?php echo $panier; ?></p>
        <?php } ?>
    </body>
</html>
