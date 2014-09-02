<?php
header("Content-Type: text/html; charset=UTF-8");
mb_internal_encoding("UTF-8");
?>

<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Sidebar Builder</title>
	<link rel="stylesheet" href="sidebar-builder.css" type="text/css"/>
</head>
<body>
<form action="" method="GET">
	<label for="categories">Categories: </label>
	<input type="text" name="categories" id="categories"/>
	<label for="tags">Tags: </label>
	<input type="text" name="tags" id="tags"/>
	<label for="month">Month: </label>
	<input type="text" name="month" id="month"/>
	<input type="submit" value="Generate"/>
</form>
<br/>

<?php
if (isset($_GET["categories"]) && isset($_GET["tags"]) && isset($_GET["month"])) {
	if (!empty($_GET["categories"]) && !empty($_GET["tags"]) && !empty($_GET["month"])) {
		echo(generateSidebar("Categories", $_GET["categories"]));
		echo(generateSidebar("Tags", $_GET["tags"]));
		echo(generateSidebar("Month", $_GET["month"]));
	}
}

function generateSidebar($title, $values)
{
	$inputSplit = preg_split('/[,\s+]+/', $values, -1, PREG_SPLIT_NO_EMPTY);
	$sidebar = "<aside><header><h2>$title</h2></header><ul>";
	foreach ($inputSplit as $item) {
		$sidebar .= "<li><a href=\"#\">$item</a></li>";
	}
	$sidebar .= "</ul></aside><br/>";
	return $sidebar;
}

?>
</body>
</html>