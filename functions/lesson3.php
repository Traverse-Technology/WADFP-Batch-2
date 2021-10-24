<?php
function loop($start, $end){
    for ($i = $start; $i <=$end; $i++){
            echo "$i<br>";
    }

}

echo var_dump(loop(1,2));
