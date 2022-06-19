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
            $query="update productos set cantidad=cantidad-'$menoscantidad' where id_producto='$prueba'";
            $resultreduccion = $conexion->query($query);
            /*$query = "delete from carrito where cliente = "
            $elimcarrito*/
        }
        $query = "delete from carrito where cliente='$otra'";
        $vaciarcarrito=$conexion->query($query);
    }
?>