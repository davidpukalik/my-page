const menuBtn = document.querySelector(".hamburger");
const mainMenu = document.querySelector(".main-menu");
const navLink = document.querySelectorAll(".nav-link");

menuBtn.addEventListener("click", function () {
    menuBtn.classList.toggle("is-active");
    mainMenu.classList.toggle("is-active");
});
for (let i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener("click", function () {
        menuBtn.classList.remove("is-active");
        mainMenu.classList.remove("is-active");
    });
}