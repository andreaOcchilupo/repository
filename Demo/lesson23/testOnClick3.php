<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="onClick">Click here</div>
        
        <script>
            document.getElementById("onClick").addEventListener("click",onClick);
            function onClick(){
                this.innerHTML = "I am the best.";
                this.style.color = "red";
                this.style.backgroundColor = "black";
            }
        </script>
    </body>
</html>