// DECLARE ALL REQUIRED VARIABLE
let slideIndex = 1;
let btnPre = document.querySelector('.prev');
let btnNext = document.querySelector('.next');
let slide = document.querySelector('#main-slider');

// Add EVENT LISTENER ON BUTTON
btnPre.addEventListener('click', function() {
  plusSlides(-1);
});

btnNext.addEventListener('click', function() {
  plusSlides(1);
});

// SET TIMER FOR AUTO IMAGE CHANGE
let timer = setInterval(function() {
  plusSlides(1);
}, 2500);

slide.addEventListener('mouseenter', function() {
  clearInterval(timer);
});

slide.addEventListener('mouseleave', function() {
  timer = setInterval(function() {
    plusSlides(1);
  }, 2500);
});

// ALL REQUIRED FUNCTION
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName('mySlides');
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  slides[slideIndex - 1].style.display = 'block';
}
