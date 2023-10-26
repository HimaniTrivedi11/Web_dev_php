<?php  
   $color1 = array("r" => "red","b" => "blue","p" => "pink");  
   $color2 = array("p" => "red", "y" =>"blue"); 

$result = array_intersect($color1, $color2);  
print_r($result);  
?>  