

let offcanvas = document.querySelector('#registrati');
let btnOpenRegister= document.querySelector('#btn-open-register');
let btnCloseRegister = document.querySelector('#btn-close-register');
let offcanvasLogin = document.querySelector('#login');
let btnOpenLogin= document.querySelector('#btn-open-login');
let btnCloseLogin = document.querySelector('#btn-close-login');
let btnLogin =document.querySelector('#btn-login');
let btnRegister =document.querySelector('#btn-register')


let errorName = document.querySelectorAll('.error-name');
let errorLogin = document.querySelectorAll('.error-login');



// console.log(errorName);
if(localStorage.getItem('offcanvasShow') === 'true' && errorName.length>0){
    offcanvas.classList.add('show');
}
if(btnOpenRegister){
    btnOpenRegister.addEventListener('click' , ()=> {
        offcanvas.classList.add('show');
        localStorage.setItem('offcanvasShow' , 'true')
    })
}

if(btnCloseRegister){
    btnCloseRegister.addEventListener('click' , ()=> {
        offcanvas.classList.remove('show');
        localStorage.removeItem('offcanvasShow')
    })
}

if(btnRegister){
    btnRegister.addEventListener('click' , ()=>{
        localStorage.removeItem('offcanvasShow')
    
    }
    )
}





if(localStorage.getItem('offcanvasShowLogin') === 'true' && errorLogin.length>0){
    offcanvasLogin.classList.add('show');
}
if(btnOpenLogin){
    btnOpenLogin.addEventListener('click' , ()=> {
        offcanvasLogin.classList.add('show');
        localStorage.setItem('offcanvasShowLogin' , 'true')
    })
}


if(btnCloseLogin){
    btnCloseLogin.addEventListener('click' , ()=> {
        offcanvasLogin.classList.remove('show');
        localStorage.removeItem('offcanvasShowLogin')
    })
}

if(btnLogin){
    btnLogin.addEventListener('click' , ()=>{
        localStorage.removeItem('offcanvasShowLogin')
    
    }
    )
}

