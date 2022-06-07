<?php 
            include("conexion.php");
        
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
?>  