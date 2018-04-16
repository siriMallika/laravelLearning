<html>
<head>
</head>
<body>
<form name="checkoutForm" method="POST" action="{{route('test.omisePay')}}">
  <script type="text/javascript" src="https://cdn.omise.co/omise.js"
    data-key="pkey_test_5bmomx6m16phcmkobbi"
    data-image="http://bit.ly/customer_image"
    data-frame-label="Merchant site name"
    data-button-label="Pay now"
    data-submit-label="Submit"
    data-location="no"
    data-amount="10025"
    data-currency="thb"
    >
  </script>
  {{ csrf_field()}}
  <!--the script will render <input type="hidden" name="omiseToken"> for you automatically-->
</form>

<!-- data-key="YOUR_PUBLIC_KEY" -->
</body>
</html>