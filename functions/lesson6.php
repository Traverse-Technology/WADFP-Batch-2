<?php
function symbol($sy, $count){
    for ($i = 1; $i <= $count; $i++){
        echo $sy;
    }
}

symbol("*",100);
echo "<br>";
symbol("-",100);
echo "<br>";
symbol("$",100);