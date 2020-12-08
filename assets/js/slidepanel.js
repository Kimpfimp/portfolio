menu = document.getElementById("popout");

function openMenu() {
    menu.style.top = "0";
    document.body.classList.add("no-scroll");
}

function closeMenu() {
    menu.style.top = "-100vh";
    document.body.classList.remove("no-scroll");
}

