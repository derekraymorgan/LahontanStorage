<!DOCTYPE html>

<html lang = "en-US">

<?php

include('includes/sections/head.php');

?>

<body class="container-fluid">


<?php

include('includes/sections/header.php');

?>

<?php

include('includes/sections/nav.php');

?>

<div class="row mainContent">

	<h1 class="row pageTitle">Lahontan Storage has many features!</h1>

	<br>

	<div class="row">

		<div class="col-xs-6 textSizer">

			<p class="textOffset">

				<ul id = 'features_list'>

					<li>Security cameras</li>
					<li>Keypad controlled gate access</li>
					<li>Many different unit sizes ranging from 4x8 to 10x18</li>
					<li>Fully fenced facility</li>
					<li>Motion activated lighting</li>
					<li>Open 7 am - 9 pm (unless prior arrangements are made)</li>
					<li>Outdoor boat, rv, and auto storage available</li>

				</ul>

			</p>

		</div>


		<div class="col-xs-6">

			<div id = 'features_photo_box_top'>

				<img class="img-thumbnail" src="images/lahontan_camera_1.jpg" class = 'features_photo_box_photo'>
				<img class="img-thumbnail" src="images/lahontan_sheds_1.jpg" class = 'features_photo_box_photo'>

			</div>

			<div id = 'features_photo_box_bottom'>

				<img class="img-thumbnail hidden-xs" src="images/lahontan_gate_1.jpg" class = 'features_photo_box_photo'>
				<img class="img-thumbnail hidden-xs" src="images/lahontan_keypad_1.jpg" class = 'features_photo_box_photo'>

			</div>

		</div>


	</div>

	<?php

	include('includes/sections/footer.php');

	?>

</div>



</body>

</html>

