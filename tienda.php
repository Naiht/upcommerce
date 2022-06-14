<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylestienda.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/funcion.js"></script>
    <script src="js/tests.js"></script>
    <title>Tienda</title>
</head>
<body>
    <?php include './nav_bar.php' ?> 
    
    <?php 
            include("conexion.php");

            $id=$_SESSION['id'];
            $correo=$_SESSION['email'];
            $nom=$_SESSION['nombre'];

            $query = "SELECT * FROM tiendas where id_usuario = $id";
            $resultado = $conexion->query($query); 
            $tiendav = $resultado ->fetch_assoc();

            $idt = $tiendav['id_tienda'];
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

            $query = "SELECT * FROM productos WHERE id_tienda = $idt";
            $resultado = $conexion->query($query);
            while($row = $resultado ->fetch_assoc()){
            ?>
                <form action="detalle_producto.php" method="POST" class="detalles-producto" type="submit">
                    <div  precio="<?php echo $row['precio']; ?>" nombre="<?php echo $row['nombrep']; ?>" class="producto">
                        <img class="imgproducto" src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>">
                        <div class="div_nombre">
                            <p class="nombre"><?php echo $row['nombrep']; ?></p>
                        </div>
                        <p class="precio"><?php echo $row['precio']; ?> C$</p>
                        <!--boton-->
                        <input name="verproducto" type="submit" value="detalles">
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
</body>
</html>