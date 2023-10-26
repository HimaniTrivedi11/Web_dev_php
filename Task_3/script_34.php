<?php

$fruits = array("apple", "banana", "cherry", "date", "mango");

$valueToCheck = "cherry";

// Check if the value exists in the array
if (in_array($valueToCheck, $fruits)) {
    echo "$valueToCheck exists in the array.";
} else {
    echo "$valueToCheck does not exist in the array.";
}
?>