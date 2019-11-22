// Initail Variable
let body = document.body;
// Get User Rating on click
body.addEventListener('click', function(e) {
  if (e.target.parentNode.classList.contains('stars')) {
    ratingSystem(e);
  }
});
// Set Default Rating
defaultRating();

// Get user rating
function ratingSystem(e) {
  let stars = e.target.parentNode;
  let starDOM = [];
  let id = e.target.id;
  let starVal;
  for (let i = 0; i < stars.childNodes.length; i++) {
    if (stars.childNodes[i].nodeType === 1) {
      starDOM.push(stars.childNodes[i]);
    }
  }
  if (id === 's3') {
    starVal = 3;
    for (let i = 0; i < 3; i++) {
      starDOM[i].classList.add('fas');
    }
    for (let i = 3; i < 5; i++) {
      starDOM[i].classList.remove('fas');
    }
  } else if (id === 's5') {
    starVal = 5;
    for (let i = 0; i < 5; i++) {
      starDOM[i].classList.add('fas');
    }
  } else if (id === 's1') {
    starVal = 1;
    for (let i = 0; i < 1; i++) {
      starDOM[i].classList.add('fas');
    }
    for (let i = 1; i < 5; i++) {
      starDOM[i].classList.remove('fas');
    }
  } else if (id === 's2') {
    starVal = 2;
    for (let i = 0; i < 2; i++) {
      starDOM[i].classList.add('fas');
    }
    for (let i = 2; i < 5; i++) {
      starDOM[i].classList.remove('fas');
    }
  } else if (id === 's4') {
    starVal = 4;
    for (let i = 0; i < 4; i++) {
      starDOM[i].classList.add('fas');
    }
    for (let i = 4; i < 5; i++) {
      starDOM[i].classList.remove('fas');
    }
  }
  // Ajax code goes here
}

// Default Rating
function defaultRating() {
  let starEl = document.querySelectorAll('.stars');
  let starVal;
  let currentStarEl = [];

  for (let j = 0; j < starEl.length; j++) {
    starVal = starEl[j].classList[1];
    for (let i = 0; i < starEl[j].childNodes.length; i++) {
      if (starEl[j].childNodes[i].nodeType === 1) {
        currentStarEl.push(starEl[j].childNodes[i]);
      }
    }

    if (starVal === '3') {
      for (let k = 0; k < 3; k++) {
        currentStarEl[k].classList.add('fas');
      }
      for (let l = 3; l < 5; l++) {
        currentStarEl[l].classList.remove('fas');
      }
    } else if (starVal === '4') {
      for (let k = 0; k < 4; k++) {
        currentStarEl[k].classList.add('fas');
      }
      for (let l = 4; l < 5; l++) {
        currentStarEl[l].classList.remove('fas');
      }
    } else if (starVal === '5') {
      for (let k = 0; k < 5; k++) {
        currentStarEl[k].classList.add('fas');
      }
    } else if (starVal === '2') {
      for (let k = 0; k < 2; k++) {
        currentStarEl[k].classList.add('fas');
      }
      for (let l = 2; l < 5; l++) {
        currentStarEl[l].classList.remove('fas');
      }
    } else if (starVal === '1') {
      for (let k = 0; k < 1; k++) {
        currentStarEl[k].classList.add('fas');
      }
      for (let l = 2; l < 5; l++) {
        currentStarEl[l].classList.remove('fas');
      }
    }
    currentStarEl = [];
  }
}
