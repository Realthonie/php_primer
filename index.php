<?php
$title = "Index";
include "includes/header.php";
?>

<!-- Basic HTML -->
<h1>Hello World - PHP Primer</h1>
<br />

<?php
//Printing to HTNL using echo
echo "Hello, PHP";
echo "<br/>";
echo "Second Line";
echo "<br/>";

?>

<?php
// declare variable
$name = "Anthony Ogugua";
$age = 35;

// echo variable
echo $name;

echo '<h1>My name is: ' . $name . ' and I am ' . $age . ' years old.</h1>';



?>
<button type="button" class="btn btn-danger">CLICK ME</button>
<button type="button" class="btn btn-primary">CLICK ME</button>
<button type="button" class="btn btn-success">CLICK ME</button>


<?php

require "includes/footer.php";
?>