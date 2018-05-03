<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Compteurs de clicks</title>
        <script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
    </head>
    <body>
        <footer id='footer'><h1 @click=doAction>Nombre de clicks : {{ nrClicks }}</h1></footer>
    </body>
    <script src="cmpClicksJS.js" type="text/javascript"></script>
</html>
