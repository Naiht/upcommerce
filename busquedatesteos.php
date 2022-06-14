<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/busq-style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>Buscar</title>
</head>
<body>
    <?php include './nav_bar.php' ?> 
        
        <?php 
                include("conexion.php");

                $id=$_SESSION['id'];
                $correo=$_SESSION['email'];
                $nom=$_SESSION['nombre'];
                
                $busq =$_GET['busqueda'];
        ?>


        <!--Lista de productos del panel-->
        <div class = "productoslst">
            <?php
                $query = "SELECT * FROM productos WHERE nombrep like '%$busq%'";
                $resultado = $conexion->query($query);
                $cont = [];
                while($row = $resultado ->fetch_assoc()){
                  ?>
                        
                        <div class="producto2" precio="<?php echo $row['precio']; ?>" nombre="<?php echo $row['nombrep']; ?>">
                            <form action="tienda_visita.php" method="GET" class="atiendavisita">
                            <div class="producto">
                                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>" class="imagen">
                                    <div class="item-content">
                                        <p class="nom-prod"><?php echo $row['nombrep']; ?></p>
                                        <p class="precio-prod">Precio : <?php echo $row['precio']; ?></p>
                                    </div>
                                    <input type="hidden" name="idtienda" value="<?php
                                    echo $row['id_tienda']?>">
                            </div>
                            
                            <!--boton-->
                            <input id="btn-producto" name="vista" type="submit" value="tienda">
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

    <script>
        $(document).ready(function() {
            document.addEventListener('click', function clickHandler(event) {
                var hasClass = event.target.classList.contains('producto2');
                console.log(hasClass);
                
                if(hasClass){
                    var hola = event.target;
                    console.log(hola);
                    event.target.querySelector('#btn-producto').click();
                }
            });
        });
    </script>
</body>
</html>