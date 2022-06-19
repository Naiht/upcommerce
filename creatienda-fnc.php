<?php
    if(isset($_POST["modt"])){
        
        include("conexion.php");
        
        session_start();
        $idus=$_SESSION['id'];
        $nombre = $_POST['nombretm'];
        $fechaActual = date('Y-m-d');
        $color = $_POST['colorbanm'];
               
        $foto = addslashes(file_get_contents($_FILES['imgtm']['tmp_name']));
          
        $query = "insert into tiendas (id_usuario, nombre_t, color_ban, creacion_fecha, foto) values ($idus,'$nombre','$color','$fechaActual','$foto')";
        
        $resul = $conexion->query($query);
        
        if($resul > 0){
            header("Location: dashboard.php");
        }else{
            echo "no"; 
        }
    }
?>