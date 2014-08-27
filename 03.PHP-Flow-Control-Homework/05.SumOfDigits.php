<?php
if (isset($_POST["numbers"])) {
	function sumDigits($input)
	{
		if (ctype_digit($input)) {
			$digits = str_split($input);
			$result = array_sum($digits);
		} else {
			$result = "I cannot sum that";
		}
		return $result;
	}

	$numbers = explode(", ", $_POST["numbers"]);
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sum Of Digits</title>
</head>
<body>

<form name="numbers" method="post">
	<label for="numbers">Input string: </label>
	<input type="text" name="numbers" id="numbers"/>
	<input type="submit" name="submit" value="Submit"/>
</form>

<?php if (isset($_POST["submit"])): ?>
	<table border="1">
		<?php
		foreach ($numbers as $number) :
			?>
			<tr>
				<td><?php echo htmlspecialchars($number); ?></td>
				<td>
					<?php
					echo sumDigits($number);
					?>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
<?php endif ?>
</body>
</html>