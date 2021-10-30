<?php
$student = array("Peter" => 14, "Joe" => 14, "Ben" => 15);
echo "<pre>";
print_r($student);
echo "</pre>";
echo  $student['Peter'];
echo "<br>";
//foreach ($student as $key => $value){
//    echo "$value";
//    echo "<br>";
//}

foreach ($student as $key){
    echo "$key";
    echo "<br>";
}