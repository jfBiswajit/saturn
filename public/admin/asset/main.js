let body = document.querySelector('body');
body.addEventListener('click', function(e) {
  if (e.target.classList.contains('delete-product')) {
    let productID = e.target.parentNode.parentNode.getAttribute('data-proid');
    let xhr = new XMLHttpRequest();
    xhr.open('GET', `delete_product.php?id=${productID}`);
    xhr.send();
    e.target.parentNode.parentNode.remove();
  }
});
