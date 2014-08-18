<?php
$month = date("F");
$year = date("Y");
$totalDays = date("t");

for ($i = 1; $i <= $totalDays; $i++) {
    $date = strtotime("$i $month $year");
    if (date("l", $date) == "Sunday") {
        echo date("jS F, Y", $date) . "<br />";
    }
}
?>
<!--// Second Way-->
<?php
$currentMonth = date('m');
$timestampSunday = strtotime("first Sunday of this month");

do {
    $sundayDate = date('jS F, Y', $timestampSunday);
    echo $sundayDate . "\n";
    $timestampSunday += 7 * 24 * 60 * 60;
} while ($currentMonth == date('m', $timestampSunday));
?>