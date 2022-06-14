<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/creatienda-style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/dashboard-fnc.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>
<body>
    
    <div>
            <!--Modificar tienda HTML-->
        <div class ="modificartienda" >
            <div class = "Header-txt">
                <p>Crea tu tienda</p>   
            </div>

            <form name = "modt" class = "form-modtienda" action="creatienda-fnc.php" method="POST" enctype="multipart/form-data">
                <p>Color del banner y foto de tienda</p>
                <input class = "colorp" type="color" name ="colorbanm" placeholder="colo banner" value="">
                    
                <div class="avatar-wrapper">
                    <img class="profile-pic" src=""/>
                    <div class="upload-button">
                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                    </div>
                        <input name="imgtm" class="file-upload" type="file" accept="image/*"/>
                    </div>

                    <div class = "cont-btnnombre">
                        <div class="input-field">
                            <i class="fas fa-store"></i>
                            <input type="text" name ="nombretm" placeholder="Nombre para la tienda" value="">
                        </div>
                    <input class= "btn" name = "modt" type="submit" value="Aceptar" OnClick="test();">
                </div>
        </form>
    </div>



</body>
</html>