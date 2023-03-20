<?php
$title = "Functions";
include "includes/header.php";
?>
<h1>Functions</h1>
<?php

//Defining a function
function msg()
{
    echo "You are the best!";
}
msg();
echo "<hr>";

function addition($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "The Sum of $num1 and $num2 is: $sum" . "<br>";
}
addition(10, 20);

?>

<?php

require "includes/footer.php";
?>