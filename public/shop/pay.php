<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/header.php' ?>
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
  header('location: /');
  exit;
}
?>

  <div id="paypal-button-container" class="choose-pay-option"></div>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AYUOnAwZWkOJZDeB0jdEzrlm-L3STAUq_VYwOYspg2rZkNbStq339tDBfKg6H9XY-3rvi2gXXyDDuFWF">
  </script>

  <script>
    let getURL = window.location.href;
    let price = getURL.split('=')[1].split('&')[0];
    let email = getURL.split('=')[2];
    let id = getURL.split('=')[3];
    
    paypal.Buttons({
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: `${price}`
            }
          }]
        });
      },

      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
              let xhr = new XMLHttpRequest();
              xhr.open('GET', `shop/update_pay.php?id=${id}`);
              xhr.addEventListener('load', function() {
              if (xhr.status == 200) {
                body.innerHTML = `<div class="container" style="text-align: center; margin-top: 18%; color: green"><h4 style="margin: 0; padding:0.5rem 0">Successfully Paid!</h4><p style="margin: 0; padding:0">Thank you! for shopping with "Saturn"</p>
                </div>`;
              } else {
                body.innerHTML = `<div class="container" style="text-align: center; margin-top: 18%; color: red"><h4 style="margin: 0; padding:0.5rem 0">Failed!</h4><p style="margin: 0; padding:0">Sorry! Payment failed.</p><p style="margin: 0; padding:0">Please try later.</p>
                </div>`;
              }
            });
            xhr.send();
        });
      }
    }).render('#paypal-button-container');
</script>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/app/layout/footer.php' ?>