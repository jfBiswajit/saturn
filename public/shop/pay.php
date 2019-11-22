<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
  <div id="paypal-button-container"></div>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AYUOnAwZWkOJZDeB0jdEzrlm-L3STAUq_VYwOYspg2rZkNbStq339tDBfKg6H9XY-3rvi2gXXyDDuFWF"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
<script>
  let getURL = window.location.href;
  let price = getURL.split('=')[1].split('&')[0];
  let email = getURL.split('=')[2];
  let id = getURL.split('=')[3];
</script>

  <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
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
        console.log('paid');
        // This function shows a transaction success message to your buyer.
            let xhr = new XMLHttpRequest();
            xhr.open('GET', `http://localhost/DEV/public/shop/update_pay.php?id=${id}`);
            xhr.addEventListener('load', function() {
            if (xhr.status == 200) {
              console.log(xhr.responseText);
            } else {
              console.log(xhr.responseText);
            }
          });
          xhr.send();
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>
</body>
</html>