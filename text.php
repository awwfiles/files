<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>


<?php

	
	echo "Helo "



?>

<form action='https://www.2checkout.com/checkout/purchase' method='post'>

<input type='hidden' name='sid' value='103112767' />
<input type='hidden' name='mode' value='2CO' />
<input type='hidden' name='li_0_type' value='product' />
<input type='hidden' name='li_0_name' value='My First Product - Test Sale' />
<input type='hidden' name='li_0_description' value='https://files.awwkwards.com/download/on-my-own0983439761187273877663776473648767646469873844.zip' />
<input type='hidden' name='x_receipt_link_url' value='https://files.awwkwards.com/download/on-my-own0983439761187273877663776473648767646469873844.zip' />
<br>
<input type='text' name='li_0_price' value='25.99' />
<br>
<input type='text' name='card_holder_name' value='Checkout Shopper' />
<br>
<input type='text' name='street_address' value='123 Test Address' />
<br>
<input type='text' name='street_address2' value='Suite 200' />
<br>
<input type='text' name='city' value='Columbus' />
<br>
<input type='text' name='state' value='OH' />
<br>
<input type='text' name='zip' value='43228' />
<br>
<input type='text' name='country' value='USA' />
<br>
<input type='text' name='email' value='example@2co.com' />
<br>
<input type='text' name='phone' value='614-921-2450' />
<br>

<input name='submit' type='submit' value='Checkout' />
</form>

<script src="https://www.2checkout.com/static/checkout/javascript/direct.min.js"></script>

</body>
</html>