cardViews();


function cardViews(){
    console.log("hola");
    let contenedor = document.querySelector('.grid-layout');
    for(i =0 ; i < 5 ; i++){
        contenedor.innerHTML += `<div class="producto" onclick="detalle();">
        <img class="imgproducto" src="img/productos/mouse2.png">
        <div class="div_nombre">
            <p class="nombre">MSI ds100</p>
        </div>
        <p class="precio">20.00$</p>
        </div>`;
    }
}