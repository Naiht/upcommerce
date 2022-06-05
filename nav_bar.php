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
            <li id="nav_carrito" onclick="detalle()"><i class="fa fa-cart-shopping"></i></li>
            <li id="nav_user" onclick="btnIniciarSesion()"><i class="fa fa-user"></i></li>
           </ul>
       </nav>
    </header>
    <div class="center"><!--carrito -->
        <input type="checkbox" id="detalle">
        <div class="fondoneg container_producto"></div>
        <div class="container_producto">
            <label for="detalle" class="close-btn fas fa-time" title="close">X</label>
            <div class="dos">
                <div class="titulo">
                    <p class="carrito">Mi Carrito</p>
                </div>
                <div class="productos">
                    <div class="item">
                        <img src="img/productos/mouse2.png" class="imagen">
                        <div class="item-content">
                            <p class="nom-prod">Mouse MSI ds100</p>
                            <p class="precio-prod"> 20.00$</p>
                            <p class="cantidad"> cantidad: 1</p>
                        </div>
                        <span class="borrar-producto" data-id="">X</span><!--data id se llena decuertdo al id del item no se q onda ahi supongo que mas adelante del video esta-->
                    </div>
                </div>
                <div class="precio">
                    <p class="total">Total 20.00$</p>
                </div>
                <div class="finalizar">
                    <button class="pagar">Finalizar Compra</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>