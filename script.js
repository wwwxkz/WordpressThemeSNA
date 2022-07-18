pesquisa_container = document.getElementById("navbar-search");
progress_bar = document.getElementById("navbar-progress-container");

navbarProgress = document.getElementById("navbar-progress");
navbar = document.getElementById("navbar-container");

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
  } else {
    // Reader progress, when 0 is set to 100% to make line full and prettier
    scrollPercent = "100%";
  }

  // Updates progress-bar element
  progress_bar.style.setProperty("--scrollAmount", scrollPercent);
}

// Hide search ban in desktop mode when scrolling down, and make it visible again when scrollign up or at top 0
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
	if (prevScrollpos > currentScrollPos) {
		document.getElementById("return").style.setProperty("display", "none");
	} else {
		document.getElementById("return").style.setProperty("display", "block");
	}
  if (prevScrollpos > currentScrollPos && window.matchMedia("(min-width: 780px)").matches) {
    pesquisa_container.style.marginTop = "0";
    pesquisa_container.style.setProperty("display", "flex", "important");
    if(window.matchMedia("(min-width: 780px)").matches) {
      navbarProgress.style.setProperty("top", "140px");
      document.getElementById("mySidenav").style.top = "140px";
      navbar.style.setProperty("height", "140px");  
    }
  }
  else {
    pesquisa_container.style.marginTop = "-240px";
    if(window.matchMedia("(min-width: 780px)").matches) {
      document.getElementById("mySidenav").style.top = "93px";
      navbarProgress.style.setProperty("top", "93px");
      navbar.style.setProperty("height", "93px");  
    }
  }
  prevScrollpos = currentScrollPos;
}
document.addEventListener("scroll", processScroll);

// Menu
let menu = document.getElementById('navbar-left').getElementsByTagName('img')[0]
let open = false;
function openNav() {
  if (open == true) { 
    document.getElementById("mySidenav").style.width = "0";
    document.getElementsByClassName('menu')[1].style.display = "none";
    document.getElementsByClassName('menu')[0].style.display = "block";
    open = false;
  } else {
    if(window.matchMedia("(min-width: 780px)").matches) {
      document.getElementById("mySidenav").style.width = "min-content";
		
		document.body.addEventListener('click', closeNav);
		click = 0;
		function closeNav() {
			if (click >= 1) {
				document.getElementById("mySidenav").style.width = "0";
				click = 0;
				document.body.removeEventListener('click', closeNav);
				document.getElementsByClassName('menu')[1].style.display = "none";
    			document.getElementsByClassName('menu')[0].style.display = "block";
				open = false;
			} else {
				click += 1;
			}
		}

    } else {
      document.getElementById("mySidenav").style.width = "100%";
    }
    document.getElementsByClassName('menu')[1].style.display = "block";
    document.getElementsByClassName('menu')[0].style.display = "none";
    open = true;
  }
}

// Search icon mobile
function openSearch() {
  if (pesquisa_container.style.marginTop == "0px") {
    pesquisa_container.style.marginTop = "-240px";
  } else {
    pesquisa_container.style.marginTop = "0px";
  }
}

function returnTop(){
	scroll(0,0);
}