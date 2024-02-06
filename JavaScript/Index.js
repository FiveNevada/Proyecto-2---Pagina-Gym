document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        navbar.classList.toggle("bg-navbar", window.scrollY > 0);
    });
});