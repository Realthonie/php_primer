<?php
$title = "String Manipulation";
include "includes/header.php";
?>
<h1>String Manipulation</h1>

<?php
$phrase1 = "Student who came late";
$phrase2 = "in class, stand with rock";
$name = "anthony ogugua";

echo $phrase1 . " " . $phrase2;

//String Transformation
echo "<br>";
echo "Uppercase first letter: " . ucfirst($name) . "<br>";
echo "Uppercase first letter of each word: " . ucwords($name) . "<br>";
echo "Upper Case: " . strtoupper($name) . "<br>";
echo "Lower Case: " . strtolower($name) . "<br>";
echo "<hr/>";



?>
<?php

require "includes/footer.php";
?>