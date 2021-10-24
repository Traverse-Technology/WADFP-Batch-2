<?php

$mark = -1;

if ($mark >=0 and $mark <= 39) {
    echo "<h1>You got $mark mark! You Failed The Exam</h1>";
}elseif ($mark >=40 and $mark <= 74) {
    echo "<h1>You got $mark mark! You Passed The Exam</h1>";
}elseif ($mark >=75 and$mark <= 100) {
    echo "<h1>You got $mark mark! Distinction</h1>";
}else {
    echo "<h1>You got $mark mark! Invalid Mark</h1>";
}
?>
