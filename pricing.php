<!DOCTYPE html>

<html lang = "en-US">

<?php

	include('includes/sections/header.php');
	include('includes/functions/create_price_table.php');

?>

<div id = 'main_content'>

	<div id = 'pricing_page_content'>

		<h1>Best value in town!</h1>

		<div id = 'pricing_left_div'>

			<?php

			include('includes/arrays/prices.php');

			create_price_table('lahontan',$prices);

			?>

			<p id = 'pricing_info'>
				Every new customer must provide an initial deposit of $50. This deposit is fully refundable provided the
				unit is left in clean, undamaged condition, and rents paid current.
				<br>
				<br>
				Prepay for 11 months and get the 12th month free!
				<br>
				<br>
				Save on late charges! We offer automatic monthly billing for Visa and Mastercard customers.
			</p>





		</div>

		<div id = 'pricing_right_div'>

				<div id = 'pricing_photo_box'>

					<div id = 'pricing_photo_box_top'>

						<img src="images/lahontan_sign_1.jpg" class = 'features_photo_box_photo'>


					</div>

					<div id = 'pricing_photo_box_bottom'>

						<img src="images/lahontan_sheds_2.jpg" class = 'features_photo_box_photo'>


					</div>
				</div>

		</div>

	</div>

	<?php

	include('includes/sections/footer.php');

	?>

</div>



</body>

</html>