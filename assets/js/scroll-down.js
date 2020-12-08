double = document.getElementsByClassName("arrow")[0];
start = document.getElementById("start");

double.addEventListener("click", scrollDown);

function scrollDown() {
  start.scrollIntoView({behavior: "smooth"});
}