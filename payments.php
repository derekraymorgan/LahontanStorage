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

	<br>

	<div class="row payments">

		<div class="col-xs-12 col-md-4">

			<div class="col-xs-1 col-md-0"></div>

			<div class="col-xs-10 col-md-12 paymentOption">

				<h3>Single Payment</h3>

				<p>If you would like to make a single one time payment then use the form below.</p>

				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="singleUnit">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="S3X8JKGR22LMS">

					<input type="hidden" name="on0" value="Select storage unit size:">
					<span>Select storage unit size:</span>

					<select name="os0">
						<option value="4x8">4x8 $30.00 USD</option>
						<option value="10x10">10x10 $55.00 USD</option>
						<option value="10x15">10x15 $65.00 USD</option>
						<option value="10x18">10x18 $70.00 USD</option>
						<option value="Open Lot Storage">Open Lot Storage $35.00 USD</option>
					</select>

					<br>
					<br>

					<input type="hidden" name="on1" value="Customer Name" required>
					<p>Enter customer name below:</p>
					<input type="text" name="os1" maxlength="200" id="customerName" required>
					<input type="hidden" name="on2" value="Storage Unit Number" required digits>
					<p>Enter storage unit number below:</p>
					<input type="text" name="os2" maxlength="200" required digits>
					<br>

					<input type="hidden" name="currency_code" value="USD">

					<br>

					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

				<br>
				<br>
				<br>
				<br>

			</div>

			<div class="col-xs-1 col-md-0"></div>

		</div>


		<div class="col-xs-12 col-md-4">

			<div class="col-xs-1 col-md-0"></div>

			<div class="col-xs-10 col-md-12 paymentOption">

				<h3>Single Payment (Custom Amount)</h3>

				<p>If you would like to make a single one time payment then use the form below.</p>


				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="VT8GT633SHEY6">

					<input type="hidden" name="on0" value="Select storage unit size:">
					<span>Select storage unit size:</span>


					<br>
					<br>

					<input type="hidden" name="on1" value="Customer Name">
					<p>Enter customer name below:</p>
					<input type="text" name="os1" maxlength="200">
					<input type="hidden" name="on2" value="Storage Unit Number">
					<p>Enter storage unit number below:</p>
					<input type="text" name="os2" maxlength="200">
					<br>

					<br>

					<input type="image" src="images/paypal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

				<br>
				<br>
				<br>
				<br>

			</div>


			<div class="col-xs-1 col-md-0"></div>

		</div>



		<div class="col-xs-12 col-md-4">

			<div class="col-xs-1 col-md-0"></div>

			<div class="col-xs-10 col-md-12 paymentOption">

				<h3>Recurring Monthly Payments</h3>

				<p>If you would like to sign up for recurring monthly payments then use the form below.</p>


				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="N9D8QJHSLV9FA">

					<input type="hidden" name="on0" value="Select storage unit size:">

					<span>Select storage unit size:</span>

					<select name="os0">
						<option value="4x8">4x8 : $30.00 USD - monthly</option>
						<option value="10x10">10x10 : $55.00 USD - monthly</option>
						<option value="10x15">10x15 : $65.00 USD - monthly</option>
						<option value="10x18">10x18 : $70.00 USD - monthly</option>
						<option value="Open Lot Storage">Open Lot Storage : $35.00 USD - monthly</option>
					</select>

					<br>

					<input type="hidden" name="on1" value="Customer Name" required>

					<br>
					<p>Enter customer name below</p>

					<input type="text" name="os1" maxlength="200" required>

					<input type="hidden" name="on2" value="Storage Unit Number" required>

					<br>
					<p>Enter storage unit number below:</p>

					<input type="text" name="os2" maxlength="200" required>

					<input type="hidden" name="currency_code" value="USD">

					<br>
					<br>

					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

					<p>
						<A HREF="https://www.paypal.com/cgi-bin/webscr?cmd=_subscr-find&alias=X9V3746GK8DLG">
							<IMG SRC="https://www.paypalobjects.com/en_US/i/btn/btn_unsubscribe_LG.gif" BORDER="0">
						</A>
					</p>

					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">

				</form>

			</div>

			<div class="col-xs-1 col-md-0"></div>

		</div>


	</div>

	<?php

	include('includes/sections/footer.php');

	?>

</div>



</body>

<script>
    alert("test4");
    $(document).ready(function () {

      $('#singleUnit').validate();

    });
</script>

</html>



