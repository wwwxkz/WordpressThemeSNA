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
    if (window.matchMedia("(min-width: 910px)").matches) {
      document.getElementById("pesquisa-container").style.setProperty("margin-top", "115px");
    } else {
      document.getElementById("pesquisa-container").style.setProperty("margin-top", "84px");  
    }
  } else {
    // Reader progress, when 0 is set to 100% to make line full and prettier 
    scrollPercent = "100%";
    if (window.matchMedia("(min-width: 910px)").matches) {
      document.getElementById("pesquisa-container").style.setProperty("display", "block", "important");
      document.getElementById("pesquisa-container").style.setProperty("margin-top", "115px");  
    } else {
      document.getElementById("pesquisa-container").style.setProperty("margin-top", "84px");  
    }
  }
  // Updates progress-bar element
  document.getElementById("progress-bar").style.setProperty("--scrollAmount", scrollPercent);
}

// Makes search bar visible and hide it when menu opens
function pesquisa_visibilidade() {
  if (document.getElementById("pesquisa-container").style.top == "-170px" || document.getElementById("pesquisa-container").style.top == "") {
    document.getElementById("pesquisa-container").style.top = "0px";
  } else {
    document.getElementById("pesquisa-container").style.top = "-170px";
  }
}

// Hide search bar when menu is open (search bar is set "fixed top", it is on top of everything, including menu, as we want to open the menu, we do not want anything blocking our vision)
function pesquisa_esconder() {
  document.getElementById("pesquisa-container").style.top = "-170px";
}

// Hide search ban in desktop mode when scrolling down, and make it visible again when scrollign up or at top 0
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos && window.matchMedia("(min-width: 910px)").matches) {
    document.getElementById("pesquisa-container").style.top = "0";
    document.getElementById("pesquisa-container").style.setProperty("display", "block", "important");
  }
  else {
    document.getElementById("pesquisa-container").style.top = "-170px";
  }
  prevScrollpos = currentScrollPos;
}
document.addEventListener("scroll", processScroll);