<!DOCTYPE html>
<html>
<head>
	<title>Square Root Sum</title>
</head>
<body>
<table border="1">
	<thead>
	<tr>
		<th>Number</th>
		<th>Square Root</th>
	</tr>
	</thead>

	<tbody>
	<?php
	$sum = 0;
	for ($number = 0; $number <= 100; $number += 2) :
		?>
		<tr>
			<td><?php echo($number) ?></td>
			<td>
				<?php
				$squareRoot = round(sqrt($number), 2);
				$sum += $squareRoot;
				echo($squareRoot);
				?>
			</td>
		</tr>
	<?php endfor ?>
	</tbody>

	<tfoot>
	<tr>
		<td><strong>Total:</strong></td>
		<td><?php echo($sum) ?></td>
	</tr>
	</tfoot>
</table>

</body>
</html>