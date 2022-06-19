<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/navbar-style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/funcion.js"></script>
    <script src="js/nav_bar.js"></script>
    <script src="js/cerraropnav.js"></script>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["nombre"])){

            $id=$_SESSION['id'];
            $correo=$_SESSION['email'];
            $nom=$_SESSION['nombre'];
        }
    ?>    

    <header>
        <p onclick="btnPrinci()" class="logo2">UpCommerce</p>
       
       <form class="nav_form" action="busquedatesteos.php" name="busq" method="_GET">
        <input name="busqueda" id="nav_busq" type="text" placeholder="Buscar">
        <button id="nav_btnbusq"><i class="fas fa-search"></i></button>
       </form>

       <nav>
           <ul class="nav_opciones">
            <li id="nav_noti"><i class="fa fa-bell"></i></li>
            <li id="nav_carrito" onclick="btnCarrito()"><i class="fa fa-cart-shopping"></i></li>

            <?php 
                if(isset($_SESSION["nombre"])){
                    include("conexion.php");

                    $id=$_SESSION['id'];
                    $query = "SELECT id_tienda FROM tiendas where id_usuario = $id";
                    $resultado = $conexion->query($query); 


                    if($resultado ->fetch_assoc() > 0){
                        echo '<li id="nav_user" onclick=""><i class="fa fa-user"></i></li>';
                        echo '  <div id="opcion" class="invopciones">
                                    <ul>
                                        <a href="tienda.php"><li><i class="fa fa-shop"></i>Mi tienda</li></a> 
                                        <a href="dashboard.php"><li><i class="fa fa-dashboard"></i>Panel de control</li></a>
                                        <a href="login/salir.php"><li><i class="fa fa-close"></i>Cerrar sesion</li></a>
                                    </ul>
                                </div>';
                    }else{
                        echo '<li id="nav_user" onclick=""><i class="fa fa-user"></i></li>';
                        echo '  <div id="opcion" class="invopciones">
                                    <ul>
                                        <a href="creatienda.php"><li><i class="fa fa-shop"></i>Mi tienda</li></a> 
                                        <a href="login/salir.php"><li><i class="fa fa-close"></i>Cerrar sesion</li></a>
                                    </ul>
                                </div>';
                    }


                }else{
                    echo '<li id="nav_user" onclick="btnIniciarSesion()"><i class="fa fa-user"></i></li>';
                }
            ?>    
           </ul>
       </nav>
    </header>


</body>
</html>