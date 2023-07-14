let navbar = document.querySelector('.navbar')
let navLinks = document.querySelectorAll ('.color-custom')



window.addEventListener('scroll' , () =>{
    if ( window.scrollY > 0){
        navbar.style.backgroundColor = 'white';
        navLinks.forEach((navlink) => {
            navlink.style.color = 'var(--blue)'
           })
    } else {
        navbar.style.backgroundColor = 'transparent';
        navLinks.forEach((navlink) => {
            navlink.style.color = 'var(--blue)'
            
        })
       
    }
})

AOS.init();