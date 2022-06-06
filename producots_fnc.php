<?php 
            include("conexion.php");
        
            $nombre = $_POST['nombre'];
            $desc = $_POST['desc'];
            $idt = $_POST['idt'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
    
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    
            $query = "insert into productos (nombrep,descripcion,id_tienda,precio,cantidad,estado_venta,foto) values('$nombre','$desc',$idt,$precio,$cantidad,1,'$foto')";
    
            $resul = $conexion->query($query);
    
            if($resul){
               echo "si"; 
               echo '<script> alert("Agregado"); </script>'; 
            }else{
                echo "no"; 
            }   
?>  