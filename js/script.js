/* Projeto: Site Burger Good */
/* Arquivo: script.js */
/* Autor: Vinícius Alarcon Vilela */
/* Criação: 11/11/2021 */
//NAVBAR
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{

  menu.classList.toggle('bx-x');
  navbar.classList.toggle('active');

}

window.onscroll = () =>{

  menu.classList.remove('bx-x');
  navbar.classList.remove('active');
}

//HEADER COLOR
  window.addEventListener("scroll", function() {
    var header = this.document.querySelector("header");
    header.classList.toggle("headerscroll", window.scrollY > 10);
});


//DARK MODE
let darkmode = document.querySelector('#darkmode');

darkmode.onclick = () => {
  if(darkmode.classList.contains('bx-moon')){
    darkmode.classList.replace('bx-moon','bx-sun');
    document.body.classList.add('active');
  }else{
    darkmode.classList.replace('bx-sun','bx-moon');
    document.body.classList.remove('active');
  }
}

//TO TOP
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})

/* LOADER */
function loader(){
  document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut(){
  setInterval(loader, 2900);
}

window.onload = fadeOut;

/* CARRINHO */
let cartShop = document.querySelector('.cart-shop');

document.querySelector('#cart-btn').onclick = () =>{
    cartShop.classList.toggle('active');
}