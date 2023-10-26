<?php
// Create an empty array
$fruits = array();

// Add elements to the array using array_push()
array_push($fruits, "apple");
array_push($fruits, "mango");

//Display the array
echo "Array after adding elements: ";
echo "<br>";
print_r($fruits);

//Remove an element from the end of the array using array_pop()
$First_Fruit = array_pop($fruits);
echo "<br>";

// Display the removed element
echo "Removed element: $First_Fruit";
echo "<br>";

echo "Array after removing the last element: ";
print_r($fruits);
?>
