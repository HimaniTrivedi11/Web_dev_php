<?php
$person_detail=array("name"=>"Himani","age"=>"22","email"=>"khiamni@g.com");

unset($person_detail["email"]);
print_r($person_detail);
?>