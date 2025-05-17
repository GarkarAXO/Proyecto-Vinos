//Menu active
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
  }
});


//Menú de navegacion
const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")

navToggle.addEventListener("click", () =>{
    navMenu.classList.toggle("nav-menu_visible");

    if (navMenu.classList.contains("nav-menu-visible")){
        navToggle.setAttribute("aria-label", "Cerrar menú");
    } else{
    navToggle.setAttribute("aria-label", "Abrir menú");
    }
});

//Productos Detalles
let bigImg = document.querySelector('.big-img');
let smallImg = document.querySelectorAll('.small-img');

smallImg.forEach((img)=>{
    img.addEventListener('click', function (ev) {
        let imgClicked = ev.target;
        bigImg.src = imgClicked.src;
    })
});

//Carrusel 
const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
});


//Carrito de compras
//abrir y cerrar carrito
let cartIcon = document.querySelector('#carrito-icon');
let cart = document.querySelector('.cart');
let closeCart = document.querySelector('#close__cart');

cartIcon.onclick = () =>{
    cart.classList.add("activ");
};

closeCart.onclick = () =>{
    cart.classList.remove("activ");
};


//añadir al carrito

  const Clickbutton = document.querySelectorAll('.btn-agregar')
  const CartContent = document.querySelector('.cart__content')
  let carrito = []

  Clickbutton.forEach(btn =>{
    btn.addEventListener('click', addToCarritoItem)
  })
  
function addToCarritoItem(e){
    const button = e.target
    const item = button.closest('.productoini')
    const itemTitle = item.querySelector('.product-title').textContent;
    const itemPrice = item.querySelector('.precio').textContent;
    const itemImg = item.querySelector('.vino-bottle').src;


//variables para el carrito
const newItem = {
    title:itemTitle,
    precio:itemPrice,
    imagen:itemImg,
    cantidad:1
}

addItemCarrito(newItem)
}


function addItemCarrito(newItem){
    Swal.fire({
        position: 'bottom-end',
        icon: 'success',
        backdrop: false,
        title: 'Producto Añadido Al Carrito!',
        showConfirmButton: false,
        timer: 1500,
        toast: true
      });


    const InputElemnto = CartContent.getElementsByClassName('.cart__cantidad')
    for(let i = 0; i < carrito.length; i++){
        if(carrito[i].title === newItem.title.trim()){
            carrito[i].cantidad ++;
            const inputValue = InputElemnto[i]
            inputValue.value ++;
            CarritoTotal()
            return null;
        }
    }

    carrito.push(newItem)
    renderCarrito()
}


function renderCarrito(){
    CartContent.innerHTML = ''
    carrito.map(item => {
        const detalles = document.createElement('div')
        detalles.classList.add('cart__box')
        const Content = `

        <img src=${item.imagen} alt="" class="cart__img">
        <div class="details__box">
            <div class="cart__product__title">${item.title}</div>
            <div class="cart__price">${item.precio}</div>
            <input type="number" value=${item.cantidad} class="cart__cantidad">
        </div>

        <!--Remover del carrito-->
        <i class="fa-solid fa-trash cart__remove"></i>

        `
        detalles.innerHTML = Content;
        CartContent.append(detalles)

        detalles.querySelector(".cart__remove").addEventListener('click', removeItemCarrito)
        detalles.querySelector(".cart__cantidad").addEventListener('change', sumaCantidad)
    })
    CarritoTotal()
}

// sumatoria 

function CarritoTotal(){
    let Total = 0;
    const itemCartTotal = document.querySelector('.total__price')
    carrito.forEach((item) =>{
        const precio = Number(item.precio.replace("$", ''))
        Total = Total + (precio * item.cantidad)
        Total = Math.round(Total * 100) / 100;
    })

    itemCartTotal.innerHTML = `$${Total}`
    addLocalStorage()
}

// eliminar del carrito 

function removeItemCarrito(e){
    const buttonDelete = e.target
    const detalles = buttonDelete.closest(".cart__box")
    const title = detalles.querySelector('.cart__product__title').textContent;
    for(let i=0; i<carrito.length; i++){
        if(carrito[i].title.trim() === title.trim()){
            carrito.splice(i, 1)
        }
    }

    Swal.fire({
        position: 'bottom-end',
        icon: 'error',
        backdrop: false,
        title: 'Producto Eliminado!',
        showConfirmButton: false,
        timer: 1500,
        toast: true
      });


    detalles.remove()
    CarritoTotal()
}

function sumaCantidad(e){
    const sumaInput = e.target
    const detalles = sumaInput.closest(".cart__box")
    const title = detalles.querySelector('.cart__product__title').textContent;
    carrito.forEach(item =>{
        if(item.title.trim() === title){
            sumaInput.value < 1 ? (sumaInput.value = 1) : sumaInput.value;
            item.cantidad = sumaInput.value;
            CarritoTotal()
        }
    })
}




// guardando en el local storage 

function addLocalStorage(){
    localStorage.setItem('carrito', JSON.stringify(carrito))
  }
  
// si lo encuentra en el navegador ejecutara el guardado 
  window.onload = function(){
    const storage = JSON.parse(localStorage.getItem('carrito'));
    if(storage){
      carrito = storage;
      renderCarrito()
    }
  }