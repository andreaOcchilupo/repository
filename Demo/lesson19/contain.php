<?php 
session_start();
$content = file_get_contents('http://loripsum.net/api');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contain</title>
        <style>
            .header_droite{
                text-align: right;
            }
            .main_droite{
                text-align: justify;
                display: inline-block;
                float: right;
            }
            .main_gauche{
                text-align: center;
                display: inline-block;
                float: left;
            }
            img{
                width: 50%;
            }
            footer{
                text-align: center;
            }
            h1{
                text-align: center;
            }
            body{
                margin-left: 10%;
                margin-right: 10%;
            }
        </style>
    </head>
    <body>
        <header>
            <p class="header_droite">
                <?php echo $_SESSION["name"];?><br>
                <?php echo $_SESSION["email"];?>
            </p>
        </header>
        
        <h1>Bienvenue <?php echo $_SESSION["name"];?></h1>
        
        <article>
            <p class="main_gauche">
                <img src="image.jpg" alt="image" id="image">
            </p>
            <p class="main_droite">
                <?php echo $content;?>
            </p>
        </article>
        <footer>
            &copy OCCHILUPO Andrea
        </footer>
    </body>
</html>
