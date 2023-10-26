<?php
$colors = array("red", "green", "blue", "yellow", "violet");

// Remove elements from the array using array_splice()
$removedElements = array_splice($colors, 1, 2);

// Display the removed elements
echo "Removed elements: ";
print_r($removedElements);
echo "<br>";

// Add elements to the array using array_splice()
$replacementColors = array("purple", "pink");
array_splice($colors, 1, 0, $replacementColors);

// Display the updated array
echo "Updated array after adding elements:\n";
print_r($colors);

?>
