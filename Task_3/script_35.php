<?php
$a1 = array("Apple", "2", "3", "4", "5", "6", "7", "8", "9", "10", "mango", "red", "blue");

shuffle($a1);

foreach ($a1 as $c) {
    echo $c ." ";
}
?>