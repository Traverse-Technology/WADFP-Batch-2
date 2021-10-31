<?php
$str = "Hello World";
$pattern = "/world/i";
echo preg_match($pattern, $str);