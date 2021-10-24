<?php

function calculate($x, $y, $op){
    if ($op == "+"){
        $z = $x + $y;
    }elseif ($op == "-"){
        $z = $x - $y;
    }elseif ($op == "*"){
        $z = $x * $y;
    }elseif ($op == "%"){
        $z = $x % $y;
    }else{
        $z = "Error";
    }
    return $z;
}

echo calculate(4,3,"+");