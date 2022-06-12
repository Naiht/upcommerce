<?php 
            include("conexion.php");
        
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
?>  