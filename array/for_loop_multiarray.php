<?php
$cars = array(
    array("Honda", 12, 4),
    array("BMW", 15, 3),
    array("Saab", 20, 6)
);
//for ($i = 0; $i <= count($cars)-1; $i++){
//    for ($j = 0; $j <= count($cars[$i])-1; $j++){
//        echo $cars[$i][$j]."<br>";
//    }
//}

foreach ($cars as $car){

    foreach ($car as $info){
        echo $info."<br>";
    }

}
