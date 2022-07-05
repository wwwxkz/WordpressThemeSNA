// Remove Search Bar
//pesquisa_container = document.getElementById("pesquisa-container");
pesquisa_container_remover = document.getElementById("pesquisa-container");
pesquisa_container_remover.style.setProperty("display", "none", "important");


progress_bar = document.getElementById("progress-bar");
menu = document.querySelectorAll(".menu");
container = document.querySelector(".container");

// Remove Search Bar
//container.style.setProperty("padding-top", "227px", "important");
//container.style.setProperty("padding-top", "155px", "important");

function reveal() {
  var reveals = document.querySelectorAll(".efeito-landing-page");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 100;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

// Alter progress bar % and default behavior
let processScroll = () => {
  let docElem = document.documentElement,
    docBody = document.body,
    scrollTop = docElem["scrollTop"] || docBody["scrollTop"],
    scrollBottom = (docElem["scrollHeight"] || docBody["scrollHeight"]) - window.innerHeight,
    scroll = scrollTop / scrollBottom * 100;
    scrollPercent = scroll + "%";

  if (scroll >= 1) {
    // Sometimes scroll can be numbers greater than 100, it bugs HTML to have more than 100%, so whenever it becomes greater than 100, insert 100 and hold until it becomes less
    if (scroll > 100){
      scrollPercent = "100%"
    }
    if (window.matchMedia("(min-width: 780px)").matches) {
      pesquisa_container.style.setProperty("margin-top", "155px");
    } else {
      pesquisa_container.style.setProperty("margin-top", "70px");
    }
  } else {
    // Reader progress, when 0 is set to 100% to make line full and prettier
    scrollPercent = "100%";
    if (window.matchMedia("(min-width: 780px)").matches) {
      pesquisa_container.style.setProperty("display", "block", "important");
      pesquisa_container.style.setProperty("margin-top", "155px");
    } else {
      pesquisa_container.style.setProperty("margin-top", "70px");
    }
  }
  // Updates progress-bar element
  progress_bar.style.setProperty("--scrollAmount", scrollPercent);
}

// Makes search bar visible and hide it when menu opens
function pesquisa_visibilidade() {
  if (pesquisa_container.style.top == "-230px" || pesquisa_container.style.top == "") {
    pesquisa_container.style.top = "0px";
  } else {
    pesquisa_esconder();
  }
}

// Hide search bar when menu is open (search bar is set "fixed top", it is on top of everything, including menu, as we want to open the menu, we do not want anything blocking our vision)
function pesquisa_esconder() {
  pesquisa_container.style.top = "-230px";
}

// Adds and Removes opacity onblur
function gerenciar_opacidade(blur = false) {
  footer = document.querySelector(".footer-container");
  if(document.querySelector(".dropdown-menu").classList.contains("show") && !blur){
    menu[1].style.display = "block";
    menu[0].style.display = "none";
    container.style.opacity = ".4"
    footer.style.opacity = ".4";
  } else {
    menu[0].style.display = "block";
    menu[1].style.display = "none";
    container.style.opacity = "1";
    footer.style.opacity = "1";
    // Just make search bar visible again if in desktop mode, as for mobile it is not visible all the time
    if(window.matchMedia("(min-width: 780px)").matches && pesquisa_container.style.top == "-230px") {
      pesquisa_visibilidade();
    }
  }
}

// Hide search ban in desktop mode when scrolling down, and make it visible again when scrollign up or at top 0
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos && window.matchMedia("(min-width: 780px)").matches) {
    pesquisa_container.style.top = "0";
    pesquisa_container.style.setProperty("display", "block", "important");
  }
  else {
    pesquisa_container.style.top = "-230px";
  }
  prevScrollpos = currentScrollPos;
}
document.addEventListener("scroll", processScroll);
