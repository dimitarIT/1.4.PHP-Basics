<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>URL Replacer</title>
</head>

<body>

<form action="" method="GET">
	<div>
		<textarea name="text" placeholder="Input text"></textarea>
	</div>
	<input type="submit" value="Replace URL's">
</form>

<?php
if (isset($_GET["text"])) {
	if (!empty($_GET["text"])) {
		$text = $_GET["text"];
//		$pattern = '/<a href=[\'\"]([^<>]+)[\'\"]>([^<>]+)<\/a>/i';
//		//$pattern = "/<a href=['\"]([^<>]+)['\"]>([^<>]+)<\/a>/i";
//		preg_match_all($pattern, $text, $matches);
//		$text = preg_replace($pattern, "[URL=$1]$2[/URL]", $text);

		$text = str_replace('</a>', '[/URL]', $text);
		$text = preg_replace('/<a href="(.*?)">/', '[URL=\1]', $text);
		$text = htmlentities($text);
		echo("<p>$text</p>");
	}
}
?>

</body>
</html>