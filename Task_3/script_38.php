<?php
$fruits = array("banana", "cherry", "orange");

// Remove an element from the beginning of the array using array_shift()
$removedFruit = array_shift($fruits);

// Display the removed element
echo "Removed element from the beginning: $removedFruit";

// Add elements to the beginning of the array using array_unshift()
array_unshift($fruits, "apple", "kiwi");

// Display the updated array
echo"<br>";
echo "Updated array after adding elements at the beginning:\n";
print_r($fruits);
?>
