<?php
    //include("conexion.php");
    include 'nav_bar.php';
    $usuario=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/carrito-style.css">
</head>
<body>
    <div class="encabezadocarrito">
        <div class="text_encabezado_carrito">Mi Carrito</div>
    </div>
    <div class = "padre">
        <div class = "carrito">
            <!---<script src="js/carrito-fnc.js"></script>-->
            <?php 
                echo "<script>alert('$usuario')</script>";
                include("conexion.php");
                //$query = "select p.nombrep, p.precio,c.cantidad from productos p inner join carrito c on p.id_producto = c.producto where cliente=$usuario";
                $query = "select * from productos p inner join carrito c on p.id_producto = c.producto where cliente=$usuario";
                $resultcarrito = $conexion->query($query);
                while($lista = $resultcarrito -> fetch_assoc()){
            ?>
                <div class = "item">
                    <img src="img/productos/mouse2.png" class="imagen">
                    <div class="item-content">
                        <p class="nom-prod">mouse MSI ds100</p>
                        <p class="precio-prod">20.00$</p>
                        <p class="cantidad"> cantidad: 1</p>
                    </div>
                    <span class="borrar-producto" data-id="">X</span><!--data id se llena decuertdo al id del item no se q onda ahi supongo que mas adelante del video esta-->
                    </div>
            <?php
                }
            ?>
        </div>
        <p class="preciototal">100.00$</p>
        <button class="pagar">pagar</button>
    </div>
</body>
</html>