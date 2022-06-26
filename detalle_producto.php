<?php
    include("conexion.php");
    include './nav_bar.php';

    if(isset($_GET['verproducto'])){
        $nombre=$_GET['nomproducto'];
        $descripcion=$_GET['desproducto'];
        $precio=$_GET['preproducto'];
        $fecha=$_GET['fechapubli'];
        $cantidad=$_GET['cantproducto'];
        $id=$_GET['idproducto'];
        $idprodcarrito=$id;

        $query = "SELECT foto, id_tienda FROM productos WHERE id_producto = $id";
        $resultado = $conexion->query($query);

        $prod = $resultado ->fetch_assoc();
    
        $idtienda = $prod['id_tienda'];
    }


    if(isset($_GET['vista'])){
        $nombre=$_GET['nomproducto'];
        $descripcion=$_GET['desproducto'];
        $precio=$_GET['preproducto'];
        $fecha=$_GET['fechapubli'];
        $cantidad=$_GET['cantproducto'];
        $id=$_GET['idproducto'];
        $idprodcarrito=$id;

        $query = "SELECT foto,id_tienda FROM productos WHERE id_producto = $id";
        $resultado = $conexion->query($query);

        $prod = $resultado ->fetch_assoc();
        $idtienda = $prod['id_tienda'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalles-style.css">
    <title>Productos</title>
</head>
<body>

        
    <form action="carrito_fnc.php" method="GET" class="productoalcarrito">
        <div class="dos">         
            <div class="imagen_producto">
                <img class="img_prod" src="data:image/jpg;base64, <?php echo base64_encode($prod['foto']); ?>">
                <div class="btn-regresar">
                    <button class="regresar" onclick="regreso2();">Regresar</button>

                    <p id="vsttienda" class="tienda">Visitar Tienda</p>
                </div>
            </div>

            <div class="detalles_producto" >
                <p class="nom_prod"><?php echo $nombre ?></p>
                <div class="divdetalle">
                    <p class="detalles_prod"><?php echo $descripcion ?></p>
                </div>
                <p class="precio_prod"><?php echo $precio ?> C$</p>
                <div class="botones">
                    
                    <?php
                        if($cantidad>0){
                    ?>
                        <button class="negociar" >Negociar</button>
                        <button name="alcarrito" class="agregar" type="submit">Agregar</button>
                    <?php
                        }
                    ?>
                </div>
                <div class="otros">
                    <p class="inventario">Existencias <?php echo $cantidad ?></p>
                    <p class="fecha">Publicado el <?php echo $fecha ?></p>
                </div>
                <input type="hidden" name="productocarrito" value="<?php echo $idprodcarrito?>">
            </div>
        </div>
    </form>
    

    <form action="tienda_visita.php" method="GET" >
        <input id="btn-producto2" name="vista" type="submit" value="detalles" style="display:none">
        <input type="hidden" name="idtienda" value=" <?php echo $idtienda?> " >
    </form>


    <script>
        $(document).ready(function() {
            document.addEventListener('click', function clickHandler(event) {
                var hasClass = event.target.classList.contains('tienda');
                if(hasClass){
                    var btn = document.getElementById('btn-producto2').click();
                }
            });
        });
    </script>

    <script>
        function regreso2(){
            window.history.back();
        }
    </script>
</body>
</html>