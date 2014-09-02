<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Text Filter</title>
</head>

<body>

<form action="" method="GET">
	<div>
		<textarea name="text" placeholder="Input text"></textarea>
	</div>
	<div>
		<input type="text" name="banList" placeholder="banList"/>
	</div>
	<input type="submit" name="submit" value="Submit"/>
</form>

<?php
if (isset($_GET["text"]) && isset($_GET["banList"])) {
	if (!empty($_GET["text"]) && !empty($_GET["banList"])) {

		$text = $_GET["text"];
		$bannedWords = explode(', ', $_GET['banList']);
//		= preg_split('/[,\s+]+/', $_GET["banList"], -1, PREG_SPLIT_NO_EMPTY);

		foreach ($bannedWords as $word) {
			$wordMask = str_pad("*", strlen($word), "*");
			$text = str_replace($word, $wordMask, $text);
		}
		//Second WAY
//		foreach ($bannedWords as $word) {
//			$text = str_replace($word, str_repeat('*', strlen($word)), $text);
//		}

		echo("<p>$text</p>");
	}
}
?>

</body>
</html>