<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Battle Ship</title>
        <link href="style/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h1>Battle Ship</h1>
            <main>
                <h4><span id="instruction"></span></h4>
                <div id="ships" class="ships" style="display: none">
                    <div id="boatSize4">
                        <div></div><div></div><div></div><div></div>
                    </div>
                    <div id="boatSize3">
                        <div></div><div></div><div></div>
                    </div>
                    <div id="boatSize2">
                        <div></div><div></div>
                    </div>
                    <div id="boatSize2bis">
                        <div></div><div></div>
                    </div>
                    <div id="boatSize1">
                        <div></div>
                    </div>
                </div>
                <h4><span id="notification"></span></h4>
                <h4><span id="error"></span></h4>
                <div id="other" class="board">

                </div>
                <div id="me" class="board">
                    
                </div>
                <div>
                    <h3>Statut : <span id="state">CONFIGURING</span></h3>
                    <h4><span id="victory"></span></h4>
                </div>
            </main>
        </div>
        <script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
