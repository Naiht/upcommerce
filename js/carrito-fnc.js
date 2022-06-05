items();


function items(){
    let contenedor = document.querySelector('.carrito');
    for(i =0 ; i < 2 ; i++){
        contenedor.innerHTML += `<div class = "item">
        <img src="img/productos/mouse2.png" class="imagen">
        <div class="item-content">
            <p class="nom-prod">mouse MSI ds100</p>
            <p class="precio-prod">20.00$</p>
            <p class="cantidad"> cantidad: 1</p>
        </div>
        <span class="borrar-producto" data-id="">X</span><!--data id se llena decuertdo al id del item no se q onda ahi supongo que mas adelante del video esta-->
        </div>`;
    }
}