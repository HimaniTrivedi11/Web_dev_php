<?php
$colors = array("red", "green", "blue", "yellow", "orange", "purple");

// Extract a portion of the array
$portion = array_slice($colors, 2, 3);

// Display the extracted portion
echo "Extracted portion of the array:";
echo "<br>";
print_r($portion);
?>
