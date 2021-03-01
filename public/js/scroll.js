let scrollLeft = document.getElementById("scroll-left");
let scrollRight = document.getElementById("scroll-right");
let scrollDown = document.getElementById("scroll-down");
let scrollUp = document.getElementById("scroll-up");

scrollLeft.addEventListener("mouseover", function( event ) {
    scrollDown.style.left = "1vw";
    scrollUp.style.right = "-15vw";
}, false);

scrollRight.addEventListener("mouseover", function( event ) {
    scrollDown.style.left = "-15vw";
    scrollUp.style.right = "2vw";
}, false);