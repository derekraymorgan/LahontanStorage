
<?php

	function create_price_table( $facility_name, $prices)
	{
		echo '
		<table id = "pricing_table">

			<tr>
				<th>
				Unit Size
				</th>

				<th>
				Price<br>(per month)
				</th>

			</tr>';

		foreach($prices[$facility_name] as $size => $cost)
		{
			echo '

			<tr>

				<td>'
					. $size .
				'</td>

				<td>'
					. $cost .
				'</td>

			</tr>';
		}

		echo '</table>';
	}

?>

