<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <?php include './nav_bar.php' ?>    

    <!--Modificar tienda HTML-->
    <div class ="modificartienda" >
        <p>Modificar tienda</p>
        <form action="" method="POST" enctype="multipart/form-data">
        
            <input type="text" name ="nombretm" placeholder="Nombre Tienda">
            <input type="text" name ="idum" placeholder="idtienda">
            <p>Seleccione color del banner</p>
            <input type="color" name ="colorbanm" placeholder="colo banner">
            
            <input type="file" name="imgtm">
            <input name = "modt" type="submit" value="Aceptar">
        </form>
    </div>

    <!--Lista de productos del panel-->
    <div class = "productos-lst">
        <div class="producto">
            <img src="img/productos/mouse2.png" class="imagen">
            <div class="item-content">
                <p class="nom-prod">mouse MSI ds100</p>
                <p class="precio-prod">20.00$</p>
                <p class="cantidad"> cantidad: 1</p>
            </div>
        </div>
    </div>

    <!--Ingresar un producto-->
    <div class ="ingresarproducto" >
        <p>Ingresar productos</p>
        <form action="producots_fnc.php" method="POST" enctype="multipart/form-data">

            <input type="text" name ="nombre" placeholder="Nombre">
            <input type="text" name ="desc" placeholder="Descripcion">
            <input type="text" name ="idt" placeholder="idtienda">
            <input type="text" name ="precio" placeholder="precio">
            <input type="number" name ="cantidad" placeholder="cantidad">
            
            <input type="file" name="img">
            <input type="submit" value="Aceptar">
        </form>
    </div>

    <!--Ingresar una tienda-->
    <div class ="ingresartienda" >
        <p>Ingresar tienda</p>
        <form action="" method="POST" enctype="multipart/form-data">

            <input type="text" name ="nombret" placeholder="Nombre Tienda">
            <input type="text" name ="idu" placeholder="idusuario">
            <p>Seleccione color del banner</p>
            <input type="color" name ="colorban" placeholder="colo banner">
            <input type="file" name="img">
            <input name = "ingreprod" type="submit" value="Aceptar">
        </form>
    </div>


    <?php 
            include("conexion.php");
            //Modificar producto
            if(isset($_POST["modt"])){
                $nombre = $_POST['nombretm'];
                $idt = $_POST['idum'];
                $fechaActual = date('Y-m-d');
                $color = $_POST['colorbanm'];
               
                $foto = addslashes(file_get_contents($_FILES['imgtm']['tmp_name']));
     
                $query = "update tiendas set nombre_t = '$nombre',creacion_fecha = '$fechaActual', color_ban = '$color' , foto = '$foto' where id_tienda = 1";
        
                $resul = $conexion->query($query);
        
                if($resul){
                   echo '<script> alert("Tienda modificada correctamente"); </script>'; 
                }else{
                    echo "no"; 
                }
            }
            //Ingresar un producto
            if(isset($_POST["ingreprod"])){
                $nombre = $_POST['nombre'];
                $desc = $_POST['desc'];
                $idt = $_POST['idt'];
                $precio = $_POST['precio'];
                $cantidad = $_POST['cantidad'];
                $fechaActual = date('Y-m-d');
                
                $foto = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    
                $query = "insert into productos (nombrep,descripcion,id_tienda,precio,fecha_publi,cantidad,estado_venta,foto) values('$nombre','$desc',$idt,$precio,'$fechaActual',$cantidad,1,'$foto')";
        
                $resul = $conexion->query($query);
        
                if($resul){
                   echo "si"; 
                   echo '<script> alert("Agregado"); </script>'; 
                }else{
                    echo "no"; 
                } 
            }
    ?>  



</body>
</html>