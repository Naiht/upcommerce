function detalle(){
    document.getElementById("detalle").checked = 1;
}

//voy a quedar pelado
var nombre;
var precio;
$(document).ready(function () {

    $('.producto').on('click',function(e){
        e.preventDefault();
        nombre = $(this).attr('nombre');
        precio = $(this).attr('precio');
        alert(nombre);
        alert(precio);
    });
});
