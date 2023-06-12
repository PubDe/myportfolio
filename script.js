const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const numbr = document.getElementById('number');
const mssage = document.getElementById('msg');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const numValue = numbr.value.trim();
    const mssgeValue = mssage.value.trim();

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(numValue === '') {
        setError(numbr, 'Phone number is required');
    } else if (numValue.length < 10 ) {
        setError(numbr, 'Phone number must be at least 10 numbers.')
    } else {
        setSuccess(numbr);
    }

    if(mssgeValue === '') {
        setError(mssage, 'Please drop a masssage');
    } else {
        setSuccess(mssage);
    }

};


//---------------------------------------------------

const productContainers = [...document.querySelectorAll('.certificate-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })
})

//----------------------------------------

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


  //-------------------------------------

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

  //-------------------------------------------

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

  //------------------------------------------------

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