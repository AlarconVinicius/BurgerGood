/* Projeto: Site Burger Good */
/* Arquivo: cardapio.js */
/* Autor: Vinícius Alarcon Vilela */
/* Criação: 11/11/2021 */
//HEADER COLOR
window.addEventListener("scroll", function() {
    var header = this.document.querySelector("header");
    header.classList.toggle("headerscroll", window.scrollY > 10);
});


//SEARCH
searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    cartItem.classList.remove('active');
}

window.onscroll = () =>{

    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}
//LOGIN
let loginForm = document.querySelector('.login-form-container');
acessar-conta
document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    cartItem.classList.remove('active');
    searchForm.classList.remove('active');
}
document.querySelector('#close-login-btn').onclick = () =>{
    loginForm.classList.remove('active');
}
//SIGN IN
let signInForm = document.querySelector('.sign-in-form-container');

document.querySelector('#crie-uma').onclick = () =>{
    signInForm.classList.toggle('active');
    loginForm.classList.remove('active');
    cartItem.classList.remove('active');
    searchForm.classList.remove('active');
}
document.querySelector('#close-sign-in-btn').onclick = () =>{
  signInForm.classList.remove('active');
}

//CARRINHO
let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    searchForm.classList.remove('active');
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
  