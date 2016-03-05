


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

	<h1 class="row pageTitle">Best value in town!</h1>

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-6 textSizer">

			<?php

			include('includes/arrays/prices.php');

			create_price_table('lahontan',$prices);

			?>

			<br>

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


		<div class="col-xs-6 hidden-xs hidden-sm">

			<div id = 'pricing_photo_box_top'>

				<img class="img-thumbnail" src="images/lahontan_sheds_2.jpg" class = 'features_photo_box_photo'>

			</div>

			<div id = 'pricing_photo_box_bottom'>

				<img class="img-thumbnail" src="images/lahontan_sign_1.jpg" class = 'features_photo_box_photo'>

			</div>

		</div>


	</div>

	<?php

	include('includes/sections/footer.php');

	?>

</div>



</body>

</html>

