

/////////////////

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("menuItem");
  let dots = document.getElementsByClassName("dot");
 
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
    slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}  
  slides[slideIndex-1].style.display = "flex";
  dots[slideIndex-1].className += " active";
   setTimeout(showSlides, 2000); // Change image every 2 seconds
}

// <!------------- js for toggle form -------------->

      var LoginForm = document.getElementById("LoginForm");
      var SignUpForm = document.getElementById("SignUpForm");
      var Indicator = document.getElementById("Indicator");

      function SignUp()
      {
        SignUpForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
      }

      function login()
      {
        SignUpForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
      }


