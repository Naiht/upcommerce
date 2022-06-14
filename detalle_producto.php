<?php
    if(isset($_POST['verproducto'])){
        $nombre=$_POST['nomproducto'];
        $descripcion=$_POST['desproducto'];
        $precio=$_POST['preproducto'];
        $fecha=$_POST['fechapubli'];
        $cantidad=$_POST['cantproducto'];
        //echo "<script>alert('$nombre $descripcion $precio $fecha $cantidad');</script>";

        include './nav_bar.php';

        echo'
        
        <link rel="stylesheet" href="css/detalles-style.css">
        
        <div class="dos">
                    
        <div class="imagen_producto">
            <img class="img_prod" src="img/productos/mouse2.png">
            <div class="btn-regresar">
                <button class="regresar">Regresar</button>
            </div>
        </div>
        <div class="detalles_producto">
            <p class="nom_prod">'.$nombre.'</p>
            <div class="divdetalle">
                <p class="detalles_prod">'.$descripcion.'</p>
            </div>
            <p class="precio_prod">'.$precio.' C$</p>
            <div class="botones">
                <button class="negociar">Negociar</button>
                <BUtton class="agregar">Agregar</BUtton>
            </div>
            <div class="otros">
                <p class="inventario">Existencias '.$cantidad.'</p>
                <p class="fecha">Publicado el '.$fecha.'</p>
            </div>
        </div>
    </div>';

    }
?>
