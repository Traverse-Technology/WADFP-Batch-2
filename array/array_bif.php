<?php
$programming = array("Java1","Python1", "PHP1", "Ruby1");
$programming2 = array("Java2","Python2", "PHP2", "Ruby2");
//array_push($programming,$programming2);
//echo "<pre>";
//print_r($programming);
//echo "</pre>";


$programming3 = array_merge($programming2,$programming);
echo "<pre>";
print_r($programming3);
echo "</pre>";