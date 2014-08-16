<!DOCTYPE html>
<html>
<head>
	<title>Personal Info</title>
</head>
<body>

<?php
$firstName = "Dimitar";
$secondName = "Krasimirov";
$age = "17";
$result = "My name is " . $firstName . " " . $secondName . " and I am $age years old.";
?>

<h1>
	<?php
	echo($result);
	?>
</h1>
</body>
</html>