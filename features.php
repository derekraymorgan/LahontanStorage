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

	<h1 class="row pageTitle">Fort Churchill Storage has great features!</h1>

	<div class="row">

		<div class="col-xs-6 textSizer">

			<p class="textOffset">
				<ul id = 'features_list'>

					<li>Many different unit sizes ranging from 5x10 to 10x40</li>
					<li>Fully fenced and paved facility</li>
					<li>Keypad controlled gate access</li>
					<li>Security cameras</li>
					<li>Open 7 am - 9 pm (unless prior arrangements are made)</li>
					<li>Covered outdoor boat, rv, and auto storage available</li>

				</ul>
			</p>

		</div>


		<div class="col-xs-6">

			<div id = 'features_photo_box_top'>

				<img class="img-thumbnail" src="images/fort_churchill_gate_1.jpg" class = 'features_photo_box_photo'>
				<img class="img-thumbnail" src="images/fort_churchill_covered_1.jpg" class = 'features_photo_box_photo'>

			</div>

			<div id = 'features_photo_box_bottom'>

				<img class="img-thumbnail hidden-xs" src="images/fort_churchill_camera_1.jpg" class = 'features_photo_box_photo'>
				<img class="img-thumbnail hidden-xs" src="images/fort_churchill_keypad_1.jpg" class = 'features_photo_box_photo'>

			</div>

		</div>


	</div>

	<?php

	include('includes/sections/footer.php');

	?>

</div>



</body>

</html>

