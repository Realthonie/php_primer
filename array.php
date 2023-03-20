<?php
$title = "Arrays and Printouts";
include "includes/header.php";
?>
<h1>ARRAYS</h1>
<?php
//a variable
$num = 3;

//an array
//only one data type
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r($numbers);
echo "<br>";
echo $numbers[5];

$size = count($numbers);
echo "<br>";
echo "<p> Array numbers is size: $size";

echo "<br>";

for ($count = 0; $count < $size; $count++) {
    echo "$numbers[$count]" . "<br>";
}



?>

<?php

require "includes/footer.php";
?>