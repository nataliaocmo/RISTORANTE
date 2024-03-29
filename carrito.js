//Variable que mantiene el estado visible del carrito
var carritoVisible = false;
this.displayProducts();

//Espermos que todos los elementos de la pàgina carguen para ejecutar el script
if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready();
}

function ready(){
   
    //Agregamos funcionalidad al boton Agregar al carrito
    var botonesAgregarAlCarrito = document.getElementsByClassName('boton-item');
    for(var i=0; i<botonesAgregarAlCarrito.length;i++){
        var button = botonesAgregarAlCarrito[i];
        button.addEventListener('click', agregarAlCarritoClicked);
       
    }
    
    //Agregremos funcionalidad a los botones eliminar del carrito
    var botonesEliminarItem = document.getElementsByClassName('btn-eliminar');
    for(var i=0;i<botonesEliminarItem.length; i++){
        var button = botonesEliminarItem[i];
        button.addEventListener('click',eliminarItemCarrito);
    }

    //Agrego funcionalidad al boton sumar cantidad
    var botonesSumarCantidad = document.getElementsByClassName('sumar-cantidad');
    for(var i=0;i<botonesSumarCantidad.length; i++){
        var button = botonesSumarCantidad[i];
        button.addEventListener('click',sumarCantidad);
    }

     //Agrego funcionalidad al buton restar cantidad
    var botonesRestarCantidad = document.getElementsByClassName('restar-cantidad');
    for(var i=0;i<botonesRestarCantidad.length; i++){
        var button = botonesRestarCantidad[i];
        button.addEventListener('click',restarCantidad);
    }

    //Agregamos funcionalidad al botón comprar
    document.getElementsByClassName('btn-pagar')[0].addEventListener('click',pagarClicked)

}

//Funciòn que controla el boton clickeado de agregar al carrito
function agregarAlCarritoClicked(event){
    var button = event.target;
    var item = button.parentElement;
    var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
    var precio = item.getElementsByClassName('precio-item')[0].innerText;
    var imagenSrc = item.getElementsByClassName('img-item')[0].src;
    console.log(imagenSrc);

    agregarItemAlCarrito(titulo, precio, imagenSrc);

    hacerVisibleCarrito();
}

//Funcion que hace visible el carrito
function hacerVisibleCarrito(){
    carritoVisible = true;
    var carrito = document.getElementsByClassName('carrito')[0];
    carrito.style.marginRight = '0';
    carrito.style.opacity = '1';

    var items =document.getElementsByClassName('contenedor')[0];
    items.style.width = '60%';
}


//Actualizamos el total de Carrito
function actualizarTotalCarrito(){
    //seleccionamos el contenedor carrito
    var carritoContenedor = document.getElementsByClassName('carrito')[0];
    var carritoItems = carritoContenedor.getElementsByClassName('carrito-item');
    var total = 0;
    //recorremos cada elemento del carrito para actualizar el total
    for(var i=0; i< carritoItems.length;i++){
        var item = carritoItems[i];
        var precioElemento = item.getElementsByClassName('carrito-item-precio')[0];
        //quitamos el simobolo peso y el punto de milesimos.
        var precio = parseFloat(precioElemento.innerText.replace('$','').replace('.',''));
        var cantidadItem = item.getElementsByClassName('carrito-item-cantidad')[0];
        console.log(precio);
        var cantidad = cantidadItem.value;
        total = total + (precio * cantidad);
    }
    total = Math.round(total * 100)/100;

    document.getElementsByClassName('carrito-precio-total')[0].innerText = '$'+total.toLocaleString("es") + ",00";
}

//Funciòn que agrega un item al carrito
function agregarItemAlCarrito(titulo, precio, imagenSrc,total){
    var item = document.createElement('div');
    item.classList.add = ('item');
    var itemsCarrito = document.getElementsByClassName('carrito-items')[0];

    //controlamos que el item que intenta ingresar no se encuentre en el carrito
    var nombresItemsCarrito = itemsCarrito.getElementsByClassName('carrito-item-titulo');
    for(var i=0;i < nombresItemsCarrito.length;i++){
        if(nombresItemsCarrito[i].innerText==titulo){
            alert("El item ya se encuentra en el carrito");
            return;
        }
    }

    var itemCarritoContenido = 
       `
        <div class="carrito-item">
            <img src="${imagenSrc}" width="70px" alt="">
            <div class="carrito-item-detalles">
                <span class="carrito-item-titulo">${titulo}</span>
                <div class="selector-cantidad">
                <i class="fa-solid fa-minus restar-cantidad"<img src="iconos/menos.png" style="width: 2em; height: 2em;" />>
                
            </i>
            <input type="text" value="1" class="carrito-item-cantidad" disabled>
            <i class="fa-solid fa-plus sumar-cantidad" <img src="iconos/mas.png" style="width: 2em; height: 2em;" />>
                
            </i>
                            
                        </div>
                <span class="carrito-item-precio">${precio}</span>
            </div>
            <button class="btn-eliminar">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
        `

    item.innerHTML = itemCarritoContenido;
    itemsCarrito.append(item);

    //Agregamos la funcionalidad eliminar al nuevo item
     item.getElementsByClassName('btn-eliminar')[0].addEventListener('click', eliminarItemCarrito);

    //Agregmos al funcionalidad restar cantidad del nuevo item
    var botonRestarCantidad = item.getElementsByClassName('restar-cantidad')[0];
    botonRestarCantidad.addEventListener('click',restarCantidad);

    //Agregamos la funcionalidad sumar cantidad del nuevo item
    var botonSumarCantidad = item.getElementsByClassName('sumar-cantidad')[0];
    botonSumarCantidad.addEventListener('click',sumarCantidad);

    //Actualizamos total
    actualizarTotalCarrito();
}
//Aumento en uno la cantidad del elemento seleccionado
function sumarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
    var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
    cantidadActual++;
    selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
    actualizarTotalCarrito();
}
//Resto en uno la cantidad del elemento seleccionado
function restarCantidad(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('carrito-item-cantidad')[0].value);
    var cantidadActual = selector.getElementsByClassName('carrito-item-cantidad')[0].value;
    cantidadActual--;
    if(cantidadActual>=1){
        selector.getElementsByClassName('carrito-item-cantidad')[0].value = cantidadActual;
        actualizarTotalCarrito();
    }
}

//Elimino el item seleccionado del carrito
function eliminarItemCarrito(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    //Actualizamos el total del carrito
    actualizarTotalCarrito();

    //la siguiente funciòn controla si hay elementos en el carrito
    //Si no hay elimino el carrito
    ocultarCarrito();
}
//Funciòn que controla si hay elementos en el carrito. Si no hay oculto el carrito.
function ocultarCarrito(){
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
    if(carritoItems.childElementCount==0){
        var carrito = document.getElementsByClassName('carrito')[0];
        carrito.style.marginRight = '-100%';
        carrito.style.opacity = '0';
        carritoVisible = false;
    
        var items =document.getElementsByClassName('contenedor-items')[0];
        items.style.width = '100%';
    }
}
//Eliminamos todos los elementos del carrito y lo ocultamos
function pagarClicked(){
    alert("Gracias por la compra");

    const form = document.getElementById('carrito');
    // Agregar un evento de escucha para la presentación del formulario
    form.addEventListener('submit', function(event) {
    // Evitar que el formulario se envíe de manera predeterminada
    event.preventDefault();

    // Crear un objeto FormData para recopilar los datos del formulario
    const formData = new FormData(form);

    // Realizar la solicitud de fetch
    fetch('http://127.0.0.1:8000/api/store',{
        method: 'POST',
        body: formData,
    })
    .then(response => {
        // Manejar la respuesta del servidor
        if (!response.ok) {
            throw new Error('Error en la solicitud');
        }
        return response.json(); // Suponiendo que el controlador devuelve datos JSON
    })
    .then(data => {
        // Manejar los datos devueltos por el controlador
        console.log(data);
    })
    .catch(error => {
        // Manejar errores de red o errores del servidor
        console.error(error);
    });
    });

     //Elimino todos los elmentos del carrito
     var carritoItems = document.getElementsByClassName('carrito-items')[0];
     while (carritoItems.hasChildNodes()){
         carritoItems.removeChild(carritoItems.firstChild)
     }

    actualizarTotalCarrito();
    ocultarCarrito();
    reiniciarCarrito(); 
}

function reiniciarCarrito(){
    
}


async function displayProducts()
{
    const productInfo = document.getElementById('cont');

    try {
       
       
        const response = await fetch(`http://127.0.0.1:8000/api/products`);
        const data = await response.json();
       
        console.log(data);
        productInfo.innerHTML = ""; // limpiar la pagina

        await new Promise((resolve) => setTimeout(resolve, 2000)); //esperar a que se obtenga una respuesta


            data.forEach(products => {
                const productItem = document.createElement("div");
                productItem.classList.add("item");

                productInfo.innerHTML += `
                <div class="item">
                    <span class="titulo-item" style=" display: block;
                    font-weight: bold;
                    text-align: center;
                    text-transform: uppercase;
                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                    padding: 1.25em;">${products.name}</span>
                    <div style="display: flex; justify-content: center; align-items: center; height: 10em;">
                    <img src="${products.img}" alt="" class="img-item" style="width: 10em; height: 10em;">
                  </div>
                    <span class="precio-item" style=" display: block;
                    text-align: center;
                    font-weight: bold;
                    font-size: 1.5em;
                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">${products.price}</span>
                    <button class="boton-item"  style="display: block;
                    margin: 0.625em auto;
                    border: none;
                    background-color: black;
                    color: #fff;
                    padding: 0.3125em 0.9375em;
                    border-radius: 0.3125em;
                    cursor: pointer;
                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" > Agregar al Carrito</button>
                    </div>`;
                    
                    
                    // reescribir el html 

                // productInfo.appendChild(productItem);

        
            });
            this.ready();
    } catch (error) {
        console.error(error);
    }
}