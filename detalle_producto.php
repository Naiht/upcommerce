<?php
    include("conexion.php");
    if(isset($_GET['verproducto'])){
        $nombre=$_GET['nomproducto'];
        $descripcion=$_GET['desproducto'];
        $precio=$_GET['preproducto'];
        $fecha=$_GET['fechapubli'];
        $cantidad=$_GET['cantproducto'];
        $id=$_GET['idproducto'];
        

        $query = "SELECT foto FROM productos WHERE id_producto = $id";
        $resultado = $conexion->query($query);

        $prod = $resultado ->fetch_assoc();

        include './nav_bar.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalles-style.css">
    <title>Document</title>
</head>
<body>

        
    <div class="dos">          
        <div class="imagen_producto">
            <img class="img_prod" src="data:image/jpg;base64, <?php echo base64_encode($prod['foto']); ?>">
            <div class="btn-regresar">
                <button class="regresar" onclick="regreso();">Regresar</button>

                <input type="hidden" name="tienda" class="regresar" onclick="regreso();"></button>
                <p id="vsttienda">Visitar Tienda</p>
            </div>
        </div>
        <div class="detalles_producto">
            <p class="nom_prod"><?php echo $nombre ?></p>
            <div class="divdetalle">
                <p class="detalles_prod"><?php echo $descripcion ?></p>
            </div>
            <p class="precio_prod"><?php echo $precio ?> C$</p>
            <div class="botones">
                <button class="negociar">Negociar</button>
                <BUtton class="agregar">Agregar</BUtton>
            </div>
            <div class="otros">
                <p class="inventario">Existencias <?php echo $cantidad ?></p>
                <p class="fecha">Publicado el <?php echo $fecha ?></p>
            </div>
        </div>
    </div>
    
    <script>
        function regreso(){
            location.href = "tienda.php";
        }
    </script>
</body>
</html>