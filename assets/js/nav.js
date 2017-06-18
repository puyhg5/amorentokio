var btnNav = document.querySelector(".btn-nav");
var navMobile = document.querySelector(".mobile-nav-cover");

function toggleMenu() {
  navMobile.classList.toggle('active');
}

btnNav.addEventListener("click", toggleMenu);

function closeNavMobile(){
  if(window.innerWidth > 780){
    navMobile.classList.remove("active");
  }
}

window.addEventListener("resize",closeNavMobile);

var btnSearch = document.querySelector(".search-item-nav");
var inputSearchDesktop = document.querySelector(".search-input-desktop");
var lineSearch = document.querySelector(".line-search");

function deploySearch(){
  inputSearchDesktop.classList.toggle("active-search");
  lineSearch.classList.toggle("inactive");
}

btnSearch.addEventListener("click", deploySearch);
