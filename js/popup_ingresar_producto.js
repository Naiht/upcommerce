function ingresoprod(){
    document.getElementById("ingresar_producto").checked = 1;
}
if(window.history.replaceState){
    window.history.replaceState(null, null,window.location.href);
}
