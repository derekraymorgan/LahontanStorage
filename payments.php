<!DOCTYPE html>

<html lang = "en-US">


<?php

include('includes/sections/head.php');
include('includes/functions/create_price_table.php');

?>

<body class="container-fluid">


<?php

include('includes/sections/header.php');

?>

<?php

include('includes/sections/nav.php');

?>


<div class="row mainContent">

	<h2 class="row pageTitle">Choose from the payment options below.</h2>

	<div class="row payments">

		<div class="col-xs-12 col-md-6">

			<div class="col-xs-1"></div>

			<div class="col-xs-10 paymentOption">

				<h3>Single Payment</h3>

				<p>If you would like to make a single one time payment then use the form below.</p>

				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6YKF37EAR8NL6">

					<input type="hidden" name="on0" value="Select storage unit size:">
					<span>Select storage unit size:</span>

					<select name="os0">
						<option value="5x10 Storage Unit">5x10 Storage Unit $30.00 USD</option>
						<option value="10x10 Storage Unit">10x10 Storage Unit $45.00 USD</option>
						<option value="15x10 Storage Unit">15x10 Storage Unit $55.00 USD</option>
						<option value="20x10 Storage Unit">20x10 Storage Unit $65.00 USD</option>
						<option value="30x10 Storage Unit">30x10 Storage Unit $110.00 USD</option>
						<option value="40x10 Storage Unit">40x10 Storage Unit $130.00 USD</option>
						<option value="Covered RV Parking">Covered RV Parking $40.00 USD</option>
					</select>

					<br>
					<br>

					<input type="hidden" name="on1" value="Customer Name">
					<p>Enter customer name below:</p>
					<input type="text" name="os1" maxlength="200">
					<input type="hidden" name="on2" value="Storage Unit Number">
					<p>Enter storage unit number below:</p>
					<input type="text" name="os2" maxlength="200">
					<br>


					<input type="hidden" name="currency_code" value="USD">

					<br>

					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

			</div>

			<div class="col-xs-1"></div>

		</div>

		<div class="col-xs-12 col-md-6">

			<div class="col-xs-1"></div>

			<div class="col-xs-10 paymentOption">

				<h3>Recurring Monthly Payments</h3>

				<p>If you would like to sign up for recurring monthly payments then use the form below.</p>


				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="XS7ZR9U522MLG">

					<input type="hidden" name="on0" value="Select storage unit size:">

					<span>Select storage unit size:</span>

					<select name="os0">
						<option value="5x10 Storage Unit">5x10 Storage Unit : $30.00 USD - monthly</option>
						<option value="10x10 Storage Unit">10x10 Storage Unit : $45.00 USD - monthly</option>
						<option value="15x10 Storage Unit">15x10 Storage Unit : $55.00 USD - monthly</option>
						<option value="20x10 Storage Unit">20x10 Storage Unit : $65.00 USD - monthly</option>
						<option value="30x10 Storage Unit">30x10 Storage Unit : $110.00 USD - monthly</option>
						<option value="40x10 Storage Unit">40x10 Storage Unit : $130.00 USD - monthly</option>
						<option value="Covered RV Parking">Covered RV Parking : $40.00 USD - monthly</option>
					</select>

					<br>

					<input type="hidden" name="on1" value="Customer Name">

					<br>
					<p>Enter customer name below</p>

					<input type="text" name="os1" maxlength="200">

					<input type="hidden" name="on2" value="Storage Unit Number">

					<br>
					<p>Enter storage unit number below:</p>

					<input type="text" name="os2" maxlength="200">

					<input type="hidden" name="currency_code" value="USD">

					<br>
					<br>

					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

				</form>

			</div>

			<div class="col-xs-1"></div>

		</div>


	</div>

	<?php

	include('includes/sections/footer.php');

	?>

</div>



</body>

</html>



