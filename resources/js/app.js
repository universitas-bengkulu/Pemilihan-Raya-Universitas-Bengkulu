import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


 window.onscroll = function () {
     scrollFunction();
     navMobileHome();
 };

function scrollFunction() {
    if (
        document.body.scrollTop > 80 ||
        document.documentElement.scrollTop > 80
    ) {
        document.getElementById("navbar").style.padding = "15px 25px";
        document.getElementById("top-bar").classList.add("hidden");
        document.getElementById("navbar").classList.add("nav-scroll");
        document.getElementById("navbar").classList.add("shadow-lg");
        document.getElementById("list-menu").classList.add("list-menu-scroll");
    } else {
        document.getElementById("top-bar").classList.remove("hidden");
        document.getElementById("navbar").style.padding = "20px 25px";
        document.getElementById("navbar").classList.remove("nav-scroll");
        document.getElementById("navbar").classList.remove("shadow-lg");
        document
            .getElementById("list-menu")
            .classList.remove("list-menu-scroll");
    }
}

var startProductBarPos = -1;
function navMobileHome() {
    var bar = document.getElementById("mobile-nav");
    if (startProductBarPos < 0) startProductBarPos = findPosY(bar);

    if (pageYOffset > startProductBarPos) {
        bar.style.position = "fixed";
        bar.style.paddingTop = "0px";
        bar.style.top = "65px";
    } else {
        bar.style.position = "absolute";
        bar.style.paddingTop = "40px";
    }
}
