<?php
    include("conexion.php");
    session_start();
    if(isset($_SESSION["nombre"])){
        if(isset($_GET['alcarrito'])){
            $idproducto=$_GET['productocarrito'];
            $idcliente=$_SESSION['id'];

            $query="SELECT * FROM carrito WHERE producto='$idproducto'";
            $carrito = $conexion->query($query);
            if(!$carrito->num_rows>0){
                $query="INSERT INTO carrito(producto,cliente,cantidad)
                values('$idproducto','$idcliente','1')";
                $carrito = $conexion->query($query);
                
            }else{
                $query="update carrito set cantidad=cantidad+1 where producto='$idproducto'";
                $carrito = $conexion->query($query);
            }
            echo "<script>alert('Producto agregado al carrito')</script>";
        }
    }else{
        echo "<script>alert('debes iniciar sesion')</script>";
    }
    echo"<script>function atras(){windows.history.back();}atras();</script>";
?>
