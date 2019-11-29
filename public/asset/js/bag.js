function cart() {
  let body = document.querySelector('body');
  let bag = document.querySelector('.bag');
  let bagDetails = document.querySelector('.bag-details');
  let cancelBag = document.querySelector('.cancel-bag');

  bag.addEventListener('click', function() {
    bagDetails.classList.toggle('show');
  });

  cancelBag.addEventListener('click', function(e) {
    if (bagDetails.classList.contains('show')) {
      bagDetails.classList.remove('show');
    }
  });

  bagDetails.addEventListener('click', function(e) {
    if (e.target.classList.contains('delete-item')) {
      e.target.parentNode.parentNode.remove();
      let rmItemPrice = parseInt(
        e.target.parentNode.parentNode.children[3].children[0].textContent
      );
      let showPrice = document.querySelector('.bag .price');
      let oldPrice = parseInt(showPrice.children[0].textContent.split(' ')[1]);
      let updatePrice = oldPrice - rmItemPrice;
      let showTotalAmount = document.querySelector('.bag-details>p');
      let showItemCounter = document.querySelector('.bag .items');
      let itemCounter = showItemCounter.textContent.split(' ')[0];
      itemCounter--;
      showItemCounter.innerHTML = `${itemCounter} ITEMS`;
      showPrice.innerHTML = `<p>BDT ${updatePrice}</p>`;
      showTotalAmount.innerHTML = `<p>BDT ${updatePrice}</p>`;
      console.log(e.target.parentNode.parentNode);
    }
  });

  // Add to cart
  body.addEventListener('click', function(e) {
    if (e.target.classList.contains('add-to-cart')) {
      let currentEl = e.target.parentNode.parentNode.parentNode;
      let title = e.target.parentNode.parentNode.parentNode.getAttribute(
        'data-producttitle'
      );
      let img = currentEl.childNodes[1].children[0].children[0].getAttribute(
        'src'
      );
      let price = currentEl.childNodes[3].childNodes[1].childNodes[1].innerText;
      price = parseInt(price.split(' ')[1]);

      let item = document.querySelector('.bag-body .items');
      item.innerHTML += `<div class="item"><div class="part-1"><i class="fas fa-plus"></i><p class="quantity">1</p><i class="fas fa-minus"></i></div><div class="part-2"><img src="${img}" alt=""></div><div class="part-3"><div class="item-details"><p>${title}</p><p>Quantity: 1</p><p>PPI: BDT ${price}</p></div></div><div class="part-4"><p>${price}</p></div><div class="part-5"><i class="far fa-trash-alt delete-item"></i></div></div>`;

      let cartItems = document.querySelector('.bag-details .items');
      let showItemCounter = document.querySelector('.bag .items');
      let showPrice = document.querySelector('.bag .price');
      let oldPrice = parseInt(showPrice.children[0].textContent.split(' ')[1]);
      let cartItemCounter = 0;
      let updatePrice = price + oldPrice;
      let showTotalAmount = document.querySelector('.bag-details>p');

      for (let i = 0; i < cartItems.childNodes.length; i++) {
        if (
          cartItems.childNodes[i].nodeType === 1 &&
          cartItems.childNodes[i].classList.contains('item')
        ) {
          cartItemCounter++;
        }
      }

      showPrice.innerHTML = `<p>USD ${updatePrice}</p>`;
      showTotalAmount.innerHTML = `<p>USD ${updatePrice}</p>`;
      showItemCounter.innerHTML = `${cartItemCounter} ITEMS`;

      // Add to PHP session
      let productID = currentEl.getAttribute('data-productid');
      let sl = currentEl.getAttribute('data-sl');
      let xhr = new XMLHttpRequest();
      xhr.open(
        'GET',
        `shop/add_to_session.php?productID=${productID}&sl=A${sl}`
      );
      xhr.send();
    }
  });
}

cart();
