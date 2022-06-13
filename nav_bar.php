<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/navbar-style.css">
    <script src="js/funcion.js"></script>
    <script src="js/nav_bar.js"></script>
</head>
<body>
    <header>
       <p>UpCommerce</p>
       
       <form class="nav_form" action="">
        <input id="nav_busq" type="text" placeholder="Buscar">
        <button id="nav_btnbusq"><i class="fas fa-search"></i></button>
       </form>
       <nav>
           <ul class="nav_opciones">
            <li id="nav_noti"><i class="fa fa-bell"></i></li>
            <li id="nav_carrito" onclick="btnCarrito()"><i class="fa fa-cart-shopping"></i></li>
            <li id="nav_user" onclick="btnIniciarSesion()"><i class="fa fa-user"></i></li>
                <div class="contopciones">
                    <ul>
                        <li><i class="fa fa-shop"></i> Mi tienda</li>
                        <li><i class="fa fa-dashboard"></i>Panel de control</li>
                        <li><i class="fa fa-close"></i>Cerrar sesion</li>
                    </ul>
                </div>
           </ul>
       </nav>
    </header>
</body>
</html>