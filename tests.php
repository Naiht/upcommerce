<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/tests.js"></script><!-- CardView-->
</head>
<body>
    <?php include './nav_bar.php' ?>    

    <?php 
        function test(){
            include("conexion.php");
        
            $nombre = $_POST['nombre'];
            $desc = $_POST['desc'];
            $idt = $_POST['idt'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
    
            $foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
    
            $query = "insert into productos (nombrep,descripcion,id_tienda,precio,cantidad,estado_venta,foto) values('$nombre','$desc',$idt,$precio,$cantidad,1,'$foto')";
    
            $resul = $conexion->query($query);
    
            if($resul){
               echo '<script> alert("Agregado"); </script>'; 
            }else{
                echo '<script> alert("error"); </script>';
            }   
        }
?>  

    <form action="producots_fnc.php", method="POST">

    <input type="text" name ="nombre" placeholder="Nombre">
    <input type="text" name ="desc" placeholder="Descripcion">
    <input type="text" name ="idt" placeholder="idtienda">
    <input type="text" name ="precio" placeholder="precio">
    <input type="number" name ="cantidad" placeholder="cantidad">
    <input type="file" name="foto">
    <input type="submit" value="Aceptar">
    </form>


</body>
</html>