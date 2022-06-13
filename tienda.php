<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylestienda.css">
    <script src="js/funcion.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>Tienda</title>
</head>
<body>
    <?php
        session_start();
        $user=$_SESSION['nombre'];
        echo "<h1> $user </h1>";
        echo "<a href='login/salir.php'> logout </a>"
    ?>
    <?php include './nav_bar.php' ?>    
    
    <?php 
            include("conexion.php");

            $query = "SELECT * FROM tiendas";
            $resultado = $conexion->query($query); 
            $tiendav = $resultado ->fetch_assoc();
    ?>
       
    <div class="encabezado" style="background: <?php echo $tiendav['color_ban']; ?>">

    <div class="imagentienda">
            <img class="imgtienda" src="data:image/jpg;base64, <?php echo base64_encode($tiendav['foto']); ?>">
        </div>

        <div class="texto_encabezado">
            <p class="nombretienda"><?php echo $tiendav['nombre_t'] ?></p>
        </div>
    </div>

    <div class="grid-layout">
        <?php
            include("conexion.php");

            $query = "SELECT * FROM productos";
            $resultado = $conexion->query($query);
            $cont = [];
            while($row = $resultado ->fetch_assoc()){
            ?>
                <div  precio="<?php echo $row['precio']; ?>" nombre="<?php echo $row['nombrep']; ?>" class="producto" onclick="detalle();" >
                <img class="imgproducto" src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>">
                <div class="div_nombre">
                        <p class="nombre"><?php echo $row['nombrep']; ?></p>
                </div>
                <p class="precio"><?php echo $row['precio']; ?> C$</p>
                </div>`
                
        <?php
            }
        ?> 

        <div class="center"><!--div de los detalles del producto -->
            <input type="checkbox" id="detalle">
            <div class="fondoneg container_producto"></div>
            <div class="container_producto">
                <label for="detalle" class="close-btn fas fa-time" title="close">X</label>
                <div class="dos">
                    <?php ?>
                    <div class="imagen_producto">
                        <img class="img_prod" src="img/productos/mouse2.png">
                    </div>
                    <div class="detalles_producto">
                        <p id="nomjs" class="nom_prod">sfg</p>
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