<?php
$title = "If Statements";
include "includes/header.php";
?>
<?php

// An If Statement that will carry out an action based on the value of the variable

echo "<h1>If Statement</h1>";

$grade = 30;

if ($grade >= 50) {
    echo "<h3 style = 'color: green'>YOU HAVE PASSED</h3>";
} else {
    echo "<h3 style = 'color: red'>YOU HAVE FAILED</h3>";
}

?>

<?php

require "includes/footer.php";
?>