<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="onClick">Click here</div>
        
        <script>
            document.getElementById("onClick").onClick = 
            function(){
                document.getElementById("onClick").innerHTML = "I am the best.";
                document.getElementById("onClick").style.color = "red";
                document.getElementById("onClick").style.backgroundColor = "black";
            };
        </script>
    </body>
</html>
