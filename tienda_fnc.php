<?php 
            include("conexion.php");
        
            $nombre = $_POST['nombretm'];
            $idt = $_POST['idum'];
            $fechaActual = date('Y-m-d');
    
       
            $foto = addslashes(file_get_contents($_FILES['imgtm']['tmp_name']));
 
            $query = "update tiendas set nombre_t = '$nombre',creacion_fecha = '$fechaActual', foto = '$foto' where id_tienda = 1";
    
            $resul = $conexion->query($query);
    
            if($resul){
               echo "si"; 
               echo '<script> alert("Agregado"); </script>'; 
            }else{
                echo "no"; 
            } 
?>  