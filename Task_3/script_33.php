<?php 
$myArray = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);

$Check = 'email';

if (array_key_exists($Check, $myArray)) {
    echo "The key '$Check' exists in the array.";
} else {
    echo "The key '$Check' does not exist in the array.";
}
?>