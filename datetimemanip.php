<?php
$title = "Date And Time Manipulation";
include "includes/header.php";
?>
<h1>Date And Time Manipulation</h1>

<?php
$datenow = getdate();
echo "Today's Date: <br>";
echo $datenow['mday'] . '<br>';
echo $datenow['mon'] . '<br>';
echo $datenow['year'] . '<br>';

echo "Todays date is: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br>';


?>

<?php

require "includes/footer.php";
?>