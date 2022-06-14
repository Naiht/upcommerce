<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/busq-style.css">
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
                     <form action="tienda_visita.php" method="GET" class="atiendavisita">
                        <div class="producto">
                                <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>" class="imagen">
                                <div class="item-content">
                                    <p class="nom-prod"><?php echo $row['nombrep']; ?></p>
                                    <p class="precio-prod">Precio : <?php echo $row['precio']; ?></p>
                                </div>
                                <input name="vista" type="submit" value="tienda"> 
                                <input type="hidden" name="idtienda" value="<?php
                                echo $row['id_tienda']?>">
                        </div>
                     </form>
            <?php
                  }
             ?> 
        </div>
</body>
</html>