<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/index-style.css">
    <title>UpCommerce</title>
</head>
<body>
    <?php 
        include './nav_bar.php';
    ?>    
    
    <div class="banner">
        <div class="bannertexto">
           <p id="txtbanner">UpCommerce es una plataforma donde podes craear tu propia tienda <br> en poco tiempo para expandir tu negocio.</p>
           <button id="registrateban" onclick="btnIniciarSesion()">Registrate</button>
        </div>
        <img id="imgbanner" src="img/index_banner/bannerlogo.png" alt="">
    </div>

    <p class="titulosp">Nuevos Productos</p>

    <div class="grid-layout">
            <?php
                include("conexion.php");

                $query = "SELECT * FROM productos";
                $resultado = $conexion->query($query);
                while($row = $resultado ->fetch_assoc()){
                ?>
                    <form action="detalle_producto.php" method="GET" class="detalles-producto" type="submit">
                        <div  precio="<?php echo $row['precio']; ?>" nombre="<?php echo $row['nombrep']; ?>" class="producto">
                            
                            <img class="imgproducto" src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>">
                            <div class="div_nombre">
                                <p class="nombre"><?php echo $row['nombrep']; ?></p>
                            </div>
                            <p class="precio"><?php echo $row['precio']; ?> C$</p>
                            
                            <!--boton-->
                            <input id="btn-producto" name="verproducto" type="submit" value="detalles" style="display:none;">
                            <!--datos en oculto-->
                            <input type="hidden" name="nomproducto" value="<?php echo $row['nombrep']; ?>">
                            <input type="hidden" name="desproducto" value="<?php echo $row['descripcion']; ?>">
                            <input type="hidden" name="preproducto" value="<?php echo $row['precio']; ?>">
                            <input type="hidden" name="fechapubli" value="<?php echo $row['fecha_publi']; ?>">
                            <input type="hidden" name="cantproducto" value="<?php echo $row['cantidad']; ?>">
                            <input type="hidden" name="idproducto"
                            value="<?php echo $row['id_producto']; ?>">
                        </div>
                    </form>
            <?php
                }
            ?> 
        </div>
    </div>

    <script>
        $(document).ready(function() {
            document.addEventListener('click', function clickHandler(event) {
                var hasClass = event.target.classList.contains('producto');

                if(hasClass){
                    var hola = event.target;
                    event.target.querySelector('#btn-producto').click();
                }
            });
        });
    </script>

</body>
</html>