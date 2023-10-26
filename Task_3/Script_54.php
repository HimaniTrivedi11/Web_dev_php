<?php
$student=array(array("first_name"=>"Himani","last_name"=>"Dave"),
					array("first_name"=>"Kinjal","last_name"=>"Patel"),
			   	 	array("first_name"=>"Disha","last_name"=>"Shiyani"),
					array("first_name"=>"Tanu","last_name"=>"Patel"));
$First_name_of_students=array_column($student,'first_name');
print_r($First_name_of_students);
?>