let fname = document.querySelector('#fname');
let lname = document.querySelector('#lname');
let email = document.querySelector('#email');
let city = document.querySelector('#city');
let post = document.querySelector('#post');
let password = document.querySelector('#password');

let Lfname = document.querySelector('#fname-label');
let Llname = document.querySelector('#lname-label');
let Lemail = document.querySelector('#email-label');
let Lcity = document.querySelector('#city-label');
let Lpost = document.querySelector('#post-label');
let Lpassword = document.querySelector('#password-label');
let submit = document.querySelector('#submit');
let lettersREX = /^[A-Za-z]+$/;
let emailREX = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

fname.addEventListener('blur', function(e) {
  if (fname.value) {
    fname.classList.remove('form-danger');
    Lfname.classList.remove('form-text-red');
    if (!fname.value.match(lettersREX)) {
      fname.classList.add('form-danger');
      Lfname.innerHTML = 'Frist Name (Only A-Z Allowed)';
      Lfname.classList.add('form-text-red');
    }
  } else {
    fname.classList.add('form-danger');
    Lfname.innerHTML = 'Frist Name (Required)';
    Lfname.classList.add('form-text-red');
  }
});

lname.addEventListener('blur', function(e) {
  if (lname.value) {
    lname.classList.remove('form-danger');
    Llname.classList.remove('form-text-red');
    if (!lname.value.match(lettersREX)) {
      lname.classList.add('form-danger');
      Llname.innerHTML = 'Frist Name (Only A-Z Allowed)';
      Llname.classList.add('form-text-red');
    }
  } else {
    lname.classList.add('form-danger');
    Llname.innerHTML = 'Frist Name (Required)';
    Llname.classList.add('form-text-red');
  }
});

email.addEventListener('blur', function(e) {
  if (email.value) {
    email.classList.remove('form-danger');
    Lemail.classList.remove('form-text-red');
    if (!email.value.match(emailREX)) {
      email.classList.add('form-danger');
      Lemail.innerHTML = 'Email (Provide a Valid Email)';
      Lemail.classList.add('form-text-red');
    }
  } else {
    email.classList.add('form-danger');
    email.innerHTML = 'Email (Required)';
    Lemail.classList.add('form-text-red');
  }
});

city.addEventListener('blur', function(e) {
  if (city.value) {
    city.classList.remove('form-danger');
    Lcity.classList.remove('form-text-red');
    if (!city.value.match(lettersREX)) {
      city.classList.add('form-danger');
      Lcity.innerHTML = 'City (Only A-Z Allowed)';
      Lcity.classList.add('form-text-red');
    }
  } else {
    city.classList.add('form-danger');
    Lcity.innerHTML = 'City (Required)';
    Lcity.classList.add('form-text-red');
  }
});

post.addEventListener('blur', function(e) {
  if (post.value) {
    post.classList.remove('form-danger');
    Lpost.classList.remove('form-text-red');
    if (post.value.match(lettersREX)) {
      post.classList.add('form-danger');
      Lpost.innerHTML = 'Post (Only Number Allowed)';
      Lpost.classList.add('form-text-red');
    }
  } else {
    post.classList.add('form-danger');
    Lpost.innerHTML = 'Post (Required)';
    Lpost.classList.add('form-text-red');
  }
});
