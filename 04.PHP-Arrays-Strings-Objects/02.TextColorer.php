<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
function uniord($c)
{
	$h = ord($c{0});
	if ($h <= 0x7F) {
		return $h;
	} else if ($h < 0xC2) {
		return false;
	} else if ($h <= 0xDF) {
		return ($h & 0x1F) << 6 | (ord($c{1}) & 0x3F);
	} else if ($h <= 0xEF) {
		return ($h & 0x0F) << 12 | (ord($c{1}) & 0x3F) << 6
		| (ord($c{2}) & 0x3F);
	} else if ($h <= 0xF4) {
		return ($h & 0x0F) << 18 | (ord($c{1}) & 0x3F) << 12
		| (ord($c{2}) & 0x3F) << 6
		| (ord($c{3}) & 0x3F);
	} else {
		return false;
	}
}

?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Coloring Text</title>
	<style>
		.red {
			color: red;
		}

		.blue {
			color: blue;
		}
	</style>
</head>

<body>
<form method="post">
	<textarea name="text"></textarea><br>
	<input type="submit" value="Color text"/>
</form>
<?php
if (isset($_POST["text"])) {
	if (!empty($_POST["text"])) {

		for ($i = 0; $i < mb_strlen($_POST["text"]); $i++) {
			$character = mb_substr($_POST["text"], $i, 1);
			$order = uniord($character);

			if ($order % 2 == 0) {
				echo "<span class='red'> $character </span>";
			} else {
				echo "<span class='blue'> $character </span>";
			}
		}
	}
}
?>
</body>
</html>
