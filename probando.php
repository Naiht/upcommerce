<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form" action="">
        <input class="boton" type="submit" value="hola">
    </form>


    <script>
        $(".boton").click(function(){
            alert('Ha hecho click sobre el boton'); 
            document.getElementById("form").action = "index.php";
        });
    </script>

</body>
</html>