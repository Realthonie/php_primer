<?php
$title = "While/Do-While Loops";
include "includes/header.php";
?>
<h1>While Loop</h1>

<?php
$grade = 0;
while ($grade < 10) {
    echo "<p> I AM LESS THAN 10!</P>";
    $grade++;
}
echo "Exit Loop";
?>

<h1>Do-While Loop</h1>

<?php
$grade = 0;
do {
    echo "<p>I AM DO WHILE LOOP</p>";
    $grade++;
} while ($grade < 10);
echo "EXIT LOOP";
echo "<br>";
?>



<?php

require "includes/footer.php";
?>