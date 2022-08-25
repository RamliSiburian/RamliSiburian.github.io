// script js dark and light mode
// clssess moon and sun
let body = document.querySelector(".body");
let mode = document.querySelector(".mode");
let moon = document.querySelector(".moon");
let sun = document.querySelector(".sun");

// class sun clicked
sun.onclick = function() {
    mode.classList.toggle("moon_mode");
    body.classList.toggle("light_mode");
    mode.classList.remove("sun_mode");
}

// class moon clicked
moon.onclick = function() {
    mode.classList.toggle("sun_mode");
    mode.classList.remove("moon_mode");
    body.classList.remove("light_mode");
}

//scroll/ sticky efect
window.addEventListener("scroll", function() {
    let header = document.querySelector("#header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

// classess barr
let bars = document.querySelector(".bars");
let time = document.querySelector(".time");
let nav = document.querySelector(".nav");
let menu_home = document.querySelector(".menu_home");
let menu_about = document.querySelector(".menu_about");
let menu_work = document.querySelector(".menu_work");
let menu_portfolio = document.querySelector(".menu_portfolio");
let menu_contact = document.querySelector(".menu_contact");
bars.onclick = function(){
    nav.classList.toggle("cross");
    time.classList.toggle("active");
    bars.classList.toggle("deactive");
    menu_home.classList.toggle("menuhome_active");
    menu_about.classList.toggle("menuabout_active");
}
time.onclick = function(){
    nav.classList.remove("cross");
    time.classList.remove("active");
    bars.classList.remove("deactive");
}
menu_home.onclick = function(){
    nav.classList.remove("cross");
    time.classList.remove("active");
    bars.classList.remove("deactive");
}
menu_about.onclick = function(){
    nav.classList.remove("cross");
    time.classList.remove("active");
    bars.classList.remove("deactive");
}
menu_work.onclick = function(){
    nav.classList.remove("cross");
    time.classList.remove("active");
    bars.classList.remove("deactive");
}
menu_portfolio.onclick = function(){
    nav.classList.remove("cross");
    time.classList.remove("active");
    bars.classList.remove("deactive");
}
menu_contact.onclick = function(){
    nav.classList.remove("cross");
    time.classList.remove("active");
    bars.classList.remove("deactive");
}