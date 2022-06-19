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
    <form action="pagar.php" method="GET" class ="productoapagos">
        <div class = "padre">
            <div class = "carrito">
                <!---<script src="js/carrito-fnc.js"></script>-->
                <?php 
                    
                    $test = $usuario;
                    $total=0;
                    include("conexion.php");
                    $query = "select p.nombrep, p.precio, p.foto, c.cantidad from productos p inner join carrito c on p.id_producto = c.producto where cliente=$test";
                    $resultcarrito = $conexion->query($query);
                    while($lista = $resultcarrito -> fetch_assoc()){
                ?>
                    <div class = "item">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($lista['foto']); ?>" class="imagen">
                        <div class="item-content">
                            <p class="nom-prod"><?php echo $lista['nombrep']; ?></p>
                            <?php $subtotal = $lista['cantidad']*$lista['precio']; ?>
                            <p class="precio-prod"> Subtotal <?php echo $subtotal ?> C$</p>
                            <p class="cantidad"> cantidad: <?php echo $lista['cantidad']; ?> </p>
                            <?php $total = $total+$subtotal ?>
                        </div>
                        <span class="borrar-producto" data-id="">X</span><!--data id se llena decuertdo al id del item no se q onda ahi supongo que mas adelante del video esta-->
                        </div>
                <?php
                    }
                ?>
            </div>
            <p class="preciototal"><?php echo $total ?> C$</p>
            <button name="realizarpago" type="submit" class="pagar">pagar</button>
        </div>
    </form>
</body>
</html>