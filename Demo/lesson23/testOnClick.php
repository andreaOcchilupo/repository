<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div onclick="onClick(this)" id="onClick">Click here</div>
        
        <script>
            
            function onClick(id){
                id.innerHTML = "I am the best.";
                id.style.color = "red";
                id.style.backgroundColor = "black";
            }
        </script>
    </body>
</html>
