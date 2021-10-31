<?php
$str = "2b";
$pattern = "/[^0-9]/";
echo preg_match($pattern, $str);