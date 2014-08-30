<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Word Mapper</title>

	<style type="text/css">
		table, td {
			border: 1px solid black;
			background-color: #d3d3d3;
			padding: 4px;
			margin: 1px;
			font-weight: bold;
		}

	</style>
</head>

<body>
<form method="post">
	<textarea rows="10" cols="60" name="input"></textarea>
	<br/>
	<input type="submit" value="Count Words"/>
</form>
<br/>

<?php
if (isset($_POST["input"])) {
	if (!empty($_POST["input"])) {
		echo("<table class=\"words-table\">");

		$words = preg_split('/\W+/', $_POST["input"], -1, PREG_SPLIT_NO_EMPTY);
		//$counts = array_count_values($words); not sorted

		$wordMap = [];
		foreach ($words as $word) {
			if (isset ($wordMap[$word])) {
				$wordMap[$word]++;
			} else {
				$wordMap[$word] = 1;
			}
		}
		arsort($wordMap);


		foreach ($wordMap as $word => $count) { // ($counts as $word => $count) - not sorted
			echo("<tr><td>$word</td><td>$count</td></tr>");
		}
		echo("</table>");
	}
}
?>
</body>
</html>