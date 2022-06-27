<?php
    session_start();
    include("conexion.php");
    if(isset($_GET['realizarpago'])){
        
        $usuariopago=$_SESSION['id'];
        $test = $usuariopago;
        $otra=$test;
        $query = "select * from carrito where cliente=$otra";
        $resultpago = $conexion->query($query);
        while($lista = $resultpago -> fetch_assoc()){
            $prueba=$lista['producto'];
            $menoscantidad=$lista['cantidad'];
            $query="select * from productos where id_producto ='$prueba'";
            $existencia = $conexion->query($query);
            $a=$existencia->fetch_assoc();
            $b=$a['cantidad'];
            if($b>=$menoscantidad){
                //echo "<script> alert('se puede vender ')</script>";
                $query="update productos set cantidad=cantidad-'$menoscantidad' where id_producto='$prueba'";
                $resultreduccion = $conexion->query($query);
                $query = "delete from carrito where producto='$prueba'";
                $finventa=$conexion->query($query);
            }
            
        }

        $query = "select * from carrito where cliente=$otra";
        $validacion = $conexion->query($query);
        if($validacion->num_rows>0){
            echo "<script> alert('Compra realizada (Algunos productos no fueron comprados por falta de stock)')
            window.history.back()
            </script>";
        }else{
            echo "<script> alert('Compra con exito')
            window.history.back()
            </script>";
        }
        
    }

    if(isset($_GET['quitarcarrito'])){
        $quitar=$_GET['prodelim'];
        $query = "delete from carrito where producto='$quitar'";
        $quitardelcarrito = $conexion->query($query);
        header ("Location: carrito.php");
    }
?>