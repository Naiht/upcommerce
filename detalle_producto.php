<?php
    include("conexion.php");
    if(isset($_POST['verproducto'])){
        $nombre=$_POST['nomproducto'];
        $descripcion=$_POST['desproducto'];
        $precio=$_POST['preproducto'];
        $fecha=$_POST['fechapubli'];
        $cantidad=$_POST['cantproducto'];
        $id=$_POST['idproducto'];
        

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
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="css/detalles-style.css">
        
    <div class="dos">          
        <div class="imagen_producto">
            <img class="img_prod" src="data:image/jpg;base64, <?php echo base64_encode($prod['foto']); ?>">
            <div class="btn-regresar">
                <button class="regresar" onclick="regreso();">Regresar</button>
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