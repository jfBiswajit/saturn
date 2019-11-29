function update() {
  let body = document.querySelector('body');
  body.addEventListener('click', function(e) {
    if (e.target.classList.contains('update')) {
      let id = e.target.parentNode.parentNode.parentNode.children[1].children[1].children[0].getAttribute(
        'data-customerid'
      );
      console.log(id);
      let xhr = new XMLHttpRequest();
      xhr.open('GET', `asset/update_status.php?id=${id}`);
      xhr.addEventListener('load', function() {
        if (xhr.status === 200) {
          // console.log(1);
        }
      });
      xhr.send();
    }
  });
}

update();
