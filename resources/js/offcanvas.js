

let offcanvas = document.querySelector('#registrati');
let btnOpenRegister= document.querySelector('#btn-open-register');
let btnCloseRegister = document.querySelector('#btn-close-register');
let offcanvasLogin = document.querySelector('#login');
let btnOpenLogin= document.querySelector('#btn-open-login');
let btnCloseLogin = document.querySelector('#btn-close-login');

let errorName = document.querySelectorAll('.error-name');
let errorLogin = document.querySelectorAll('.error-login');



// console.log(errorName);
if(localStorage.getItem('offcanvasShow') === 'true' && errorName.length>0){
    offcanvas.classList.add('show');
}

btnOpenRegister.addEventListener('click' , ()=> {
    offcanvas.classList.add('show');
    localStorage.setItem('offcanvasShow' , 'true')
})


btnCloseRegister.addEventListener('click' , ()=> {
    offcanvas.classList.remove('show');
    localStorage.removeItem('offcanvasShow')
})




if(localStorage.getItem('offcanvasShowLogin') === 'true' && errorLogin.length>0){
    offcanvasLogin.classList.add('show');
}

btnOpenLogin.addEventListener('click' , ()=> {
    offcanvasLogin.classList.add('show');
    localStorage.setItem('offcanvasShowLogin' , 'true')
})


btnCloseLogin.addEventListener('click' , ()=> {
    offcanvasLogin.classList.remove('show');
    localStorage.removeItem('offcanvasShowLogin')
})

AOS.init();
