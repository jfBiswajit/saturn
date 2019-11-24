var basicScrollTop = function() {
  // The button
  var btnTop = document.querySelector('#goTop');
  // Reveal the button
  var btnReveal = function() {
    if (window.scrollY >= 300) {
      btnTop.classList.add('is-visible');
    } else {
      btnTop.classList.remove('is-visible');
    }
  };
  // Smooth scroll top
  var TopscrollTo = function() {
    if (window.scrollY != 0) {
      setTimeout(function() {
        window.scrollTo(0, window.scrollY - 30);
        TopscrollTo();
      }, 5);
    }
  };
  // Listeners
  window.addEventListener('scroll', btnReveal);
  btnTop.addEventListener('click', TopscrollTo);
};
basicScrollTop();
