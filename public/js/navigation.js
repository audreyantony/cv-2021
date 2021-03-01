function openNav() {
    document.getElementById("sideBarNav").style.width = "100%";
    document.getElementById("openMenuId").style.opacity = "0";
    document.getElementById("scroll-down").style.opacity = "0";
    document.getElementById("scroll-up").style.opacity = "0";
}

function closeNav() {
    document.getElementById("sideBarNav").style.width = "0";
    document.getElementById("openMenuId").style.opacity = "100%";
    document.getElementById("scroll-down").style.opacity = "100%";
    document.getElementById("scroll-up").style.opacity = "100%";
}