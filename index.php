<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index-style.css">
    <script src="js/nav_bar.js"></script>

    <title>UpCommerce</title>
</head>
<body>
    <!--
        
    -->
    <?php 
        include './nav_bar.php';
        session_start();
        $id=$_SESSION['id'];
        $correo=$_SESSION['email'];
        $nom=$_SESSION['nombre'];
        
        echo "<h1> hola $id $correo $nom</h1>";
        echo "<a href='login/salir.php'> salir </a>";
        
    ?>    
    <div class="banner">
        <div class="bannertexto">
           <p id="txtbanner">UpCommerce es una plataforma donde podes craear tu propia tienda <br> en poco tiempo para expandir tu negocio.</p>
           <button id="registrateban" onclick="btnIniciarSesion()">Registrate</button>
        </div>
        <img id="imgbanner" src="img/index_banner/bannerlogo.png" alt="">
    </div>

    <div class="grid-layout">
        <script src="js/tienda-fnc.js"></script><!-- CardView-->
        <div class="center"><!--div de los detalles del producto -->
            <input type="checkbox" id="detalle">
            <div class="fondoneg container_producto"></div>
            <div class="container_producto">
                <label for="detalle" class="close-btn fas fa-time" title="close">X</label>
                <div class="dos">
                    <div class="imagen_producto">
                        <img class="img_prod" src="img/productos/mouse2.png">
                    </div>
                    <div class="detalles_producto">
                        <p class="nom_prod">Mouse MSI ds100</p>
                        <div class="divdetalle">
                            <p class="detalles_prod">El Interceptor DS100 viene con un software exclusivo de MSI, el cual ofrece control total sobre el mouse. Que contiene manual y una guía de instalación.En la solapa principal (Sensitivity) podemos personalizar los perfiles y los modos, configurando los 7 botones a nuestro antojo y podemos ajustar la resolución DPI por separado para cada perfil, o bien usar el botón de ajuste de DPI.</p>
                        </div>
                        <p class="precio_prod">20.00$</p>
                        <div class="botones">
                            <button class="negociar">Negociar</button>
                            <BUtton class="agregar">Agregar</BUtton>
                        </div>
                        <div class="otros">
                            <p class="inventario">Existencias 3</p>
                            <p class="fecha">Publicado el 17/05/22</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>