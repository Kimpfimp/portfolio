arrow = document.getElementById("to-top");
nav = document.getElementsByTagName("nav")[0];

window.onscroll = function() {scrollFunction()};

arrow.addEventListener("click", scrollToTop);

function scrollFunction(e) {
  if ((document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) && this.oldScroll > this.scrollY) {
    arrow.style.bottom = "3vh";    
  } else {
      this.oldScroll = this.scrollY;
      arrow.style.bottom = "-20vh";
    }
}

function scrollToTop(){
  nav.scrollIntoView({
    block: "end", 
    behavior: "smooth"
    }    );
}