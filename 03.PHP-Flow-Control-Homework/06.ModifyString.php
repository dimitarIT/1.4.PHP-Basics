<?php
if (isset($_POST["string"]) && isset($_POST["function"])) {
	$input = $_POST["string"];
	$function = $_POST["function"];

	if ($function == "check-palindrome") {
		if ($input == strrev($input)) {
			$result = "$input is a palindrome!";
		} else {
			$result = "$input is not a palindrome!";
		}
	} elseif ($function == "reverse-string") {
		$result = strrev($input);
	} elseif ($function == "split") {
		$stringArray = str_split($input);
		$result = implode($stringArray, " ");
	} elseif ($function == "hash-string") {
		$result = crypt($input);
	} elseif ($function == "shuffle-string") {
		$result = str_shuffle($input);
	}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modify String</title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="string"/>
	<input type="radio" name="function" value="check-palindrome" id="check-palindrome"/>
	<label for="check-palindrome">Check Palindrome</label>
	<input type="radio" name="function" value="reverse-string" id="reverse-string"/>
	<label for="reverse-string">Reverse String</label>
	<input type="radio" name="function" value="split" id="split"/>
	<label for="split">Split</label>
	<input type="radio" name="function" value="hash-string" id="hash-string"/>
	<label for="hash-string">Hash String</label>
	<input type="radio" name="function" value="shuffle-string" id="shuffle-string"/>
	<label for="shuffle-string">Shuffle String</label>
	<input type="submit" value="submit"/>
</form>
<div id="result">
	<?php
	if (isset($result)) {
		echo($result);
	}
	?>
</div>
</body>
</html>