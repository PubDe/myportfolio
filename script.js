

//---------------------Casaroll-------------------------

const productContainers = [...document.querySelectorAll('.certificate-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })
})

//---------------------Reveal anime-------------------

function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);


  //-----------------Fadeout anime--------------------

  function fadeOut() {
    var fadings = document.querySelectorAll(".fade-out");
  
    for (var j = 0; j < fadings.length; j++) {
      var windowHeight = window.innerHeight;
      var elementTop = fadings[j].getBoundingClientRect().top;
      var elementVisible = 50;
  
      if (elementTop < windowHeight - elementVisible) {
        fadings[j].classList.add("active");
      } else {
        fadings[j].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", fadeOut);

  //------------------Fadein anime-------------------------

  function fadeIn() {
    var fadingsins = document.querySelectorAll(".fade-in");
  
    for (var k = 0; k < fadingsins.length; k++) {
      var windowHeight = window.innerHeight;
      var elementTop = fadingsins[k].getBoundingClientRect().top;
      var elementVisible = 50;
  
      if (elementTop < windowHeight - elementVisible) {
        fadingsins[k].classList.add("active");
      } else {
        fadingsins[k].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", fadeIn);

  //---------------------Show more btn---------------------------

  function showMoreFun() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("shw-btn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Show more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Show less";
      moreText.style.display = "inline";
    }
  }