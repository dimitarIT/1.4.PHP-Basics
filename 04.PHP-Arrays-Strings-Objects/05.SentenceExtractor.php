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
		<input type="text" name="word" placeholder="Word"/>
	</div>
	<input type="submit" name="submit" value="Extract sentences"/>
</form>
<?php
if (isset($_GET["text"]) && isset($_GET["word"])) {
	if (!empty($_GET["text"]) && !empty($_GET["word"])) {

//		$text = $_GET["text"];
//		$words = $_GET["word"];
//		//explode(', ', $_GET['banList']);
//
//		$pattern = '/[^\.\?!]*(\b'.$words.'\b)[^\.\?!]*[\.\?!]( |$)/i';
//		preg_match_all($pattern, $text, $matches);
//
//		foreach ($matches[0] as $sentence) {
//			echo("<p>$sentence</p>");
//		}

		$sentences = preg_split("/(?<=[.?!])\s*/", $_GET["text"], -1, PREG_SPLIT_NO_EMPTY);
		//$sentences = array_map("trim", $sentences);
		$word = $_GET['word'];
		foreach ($sentences as $sentence) {
			$sentence = trim($sentence);
			if (preg_match("/\s+$word\s+.*[.?!]+$/", $sentence)) {
				echo "<p>$sentence</p>";
			}
		}
	}
}
?>

</body>
</html>