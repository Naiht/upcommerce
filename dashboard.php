<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/dashboard-fnc.js"></script>
    <script src="js/popup_ingresar_producto.js"></script>
</head>
<body>
    <?php include './nav_bar.php' ?>    

    <?php 
        include("conexion.php");
        $id=$_SESSION['id'];
        $correo=$_SESSION['email'];
        $nom=$_SESSION['nombre'];

        $query = "select t.id_tienda, t.nombre_t, t.color_ban, t.foto from usuarios u inner join tiendas t on u.id_usuario = t.id_usuario where u.id_usuario = $id";
        $resultado = $conexion->query($query);
        $inft = $resultado ->fetch_assoc();

        $idt = $inft['id_tienda'];
    ?>   

    <div class = "contTotal">
        <!--barr Lateral-->
        <div class="sidebar-navigation" >
            <ul>
                <li class="active">
                    <i class="fa fa-store"></i>
                    <span class="tooltip">Tienda</span>
                </li>
                <li>
                    <i class="fa fa-dollar"></i>
                    <span class="tooltip">Ventas</span>
                </li>
            </ul>
        </div>
        
         <!--Lateral-->
        <div>
            <!--Modificar tienda HTML-->
            <div class ="modificartienda" >
                <div class = "Header-txt">
                    <p>Modificar Tienda</p>   
                </div>

                <form class = "form-modtienda" action="" method="POST" enctype="multipart/form-data">
                    <p>Color del banner y foto de tienda</p>
                    <input class = "colorp" type="color" name ="colorbanm" placeholder="colo banner" value="<?php echo $inft['color_ban'] ?>">
                    
                    <div class="avatar-wrapper">
                        <img class="profile-pic" src="data:image/jpg;base64, <?php echo base64_encode($inft['foto']); ?>" />
                        <div class="upload-button">
                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        </div>
                        <input name="imgtm" class="file-upload" type="file" accept="image/*"/>
                    </div>

                    <div class = "cont-btnnombre">
                        <div class="input-field">
                            <i class="fas fa-store"></i>
                            <input type="text" name ="nombretm" placeholder="Nombre Tienda" value="<?php echo $inft['nombre_t'] ?>">
                        </div>

                        <input class= "btn" name = "modt" type="submit" value="Aceptar" OnClick="test();">
                    </div>
                </form>
            </div>


            <button class="button-88" onclick="ingresoprod();">ingresar producto</button>

            <!--Lista de productos del panel-->
            <div class = "productoslst">
                <div></div>
                <div class = "Header-txt">
                    <p>Productos en tienda</p>   
                </div>
                
                <?php
                    $query = "SELECT * FROM productos WHERE id_tienda = $idt";
                    $resultado = $conexion->query($query);
                    $cont = [];
                    while($row = $resultado ->fetch_assoc()){
                    ?>
                        <div class="producto">
                                <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>" class="imagen">
                                <div class="item-content">
                                    <p class="nom-prod"><?php echo $row['nombrep']; ?></p>
                                    <p class="precio-prod">Precio : <?php echo $row['precio']; ?></p>
                                    <p class="cantidad"> cantidad: <?php echo $row['cantidad']; ?></p>
                                </div>
                        </div>
                <?php
                    }
                ?> 
            </div>

            <!--Ingresar un producto-->
            <div class="center">
                <input type="checkbox" id="ingresar_producto">
                <div class="fondo_negro container_ingresarproducto"></div>
                <div class="container_ingresarproducto">
                    <label for="ingresar_producto" class="close-btn fas fa-time" title="close">X</label>
                    <div class="dos">
                        <div class ="ingresarproducto" >
                            <p class = "ingp-titu">Ingresar producto</p>
                            <form id="formulario" action="" method="POST" enctype="multipart/form-data">

                                <input type="file" name="img">
                                    
                                <p>Nombre del producto</p>
                                <div class="input-field">
                                    <i class="fas fa-store"></i>
                                    <input type="text" name ="nombre" placeholder="Nombre producto">
                                </div>
                                    
                                <p>Descripcion</p>
                                <div class="input-field">
                                    <i class="fas fa-store"></i>
                                    <input type="text" name ="desc" placeholder="Descripcion">
                                </div>

                                <p>Precio</p>
                                <div class="input-field">
                                    <i class="fas fa-store"></i>
                                    <input type="text" name ="precio" placeholder="Precio">
                                </div>

                                <p>Cantidad</p>
                                <div class="input-field">
                                    <i class="fas fa-store"></i>
                                    <input type="number" name ="cantidad" placeholder="Cantidad">
                                </div>
                                

                                <input name="ingreprodb" class= "btn" type="submit" value="Aceptar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php 
            include("conexion.php");
            //Modificar tienda
            if(isset($_POST["modt"])){
                $nombre = $_POST['nombretm'];
                $idtm = $inft['id_tienda'];
                $fechaActual = date('Y-m-d');
                $color = $_POST['colorbanm'];
               
                $foto = addslashes(file_get_contents($_FILES['imgtm']['tmp_name']));
     
                $query = "update tiendas set nombre_t = '$nombre',creacion_fecha = '$fechaActual', color_ban = '$color' , foto = '$foto' where id_tienda = $idtm";
        
                $resul = $conexion->query($query);
        
                if($resul > 0){
                    header("Location: dashboard.php");
                }else{
                    echo "no"; 
                }
            }

            //Ingresar un producto
            if(isset($_POST["ingreprodb"])){
                $nombre = $_POST['nombre'];
                $desc = $_POST['desc'];
                $idt = $inft['id_tienda'];;
                $precio = $_POST['precio'];
                $cantidad = $_POST['cantidad'];
                $fechaActual = date('Y-m-d');
                
                $foto = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    
                $query = "insert into productos (nombrep,descripcion,id_tienda,precio,fecha_publi,cantidad,estado_venta,foto) values('$nombre','$desc',$idt,$precio,'$fechaActual',$cantidad,1,'$foto')";
        
                $resul = $conexion->query($query);
        
                if($resul){
                   echo "si"; 
                   echo '<script> alert("Agregado"); </script>';
                   echo '<script> window.location.reload(); </script>';
                }else{
                    echo "no"; 
                } 
            }
    ?>  

</body>
</html>