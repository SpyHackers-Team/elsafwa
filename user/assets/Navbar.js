//Navbar-Scroll
const nav = document.querySelector('.navbar');

window.addEventListener('scroll', function(){
    const offset = window.pageYOffset;
    
    if(offset > 75){
        nav.classList.add('nav-scroll');
       }else{
           nav.classList.remove('nav-scroll')
       }
})
//Responsive-Navbar
let menuList = document.getElementById("menuList");
let menuIcon1 = document.getElementById("menuIcon1");
let menuIcon2 = document.getElementById("menuIcon2");

menuIcon1.addEventListener("click", function addmenu1(){
    menuList.classList.toggle("turn-left");
            })
menuIcon2.addEventListener("click", function removemenu2(){
    menuList.classList.toggle("turn-left");
            })