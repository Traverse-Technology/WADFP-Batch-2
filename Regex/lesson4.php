<?php
$str = "a";
//$pattern = "/^a{5}$/";
//$pattern = "/^a{2,5}$/";
$pattern = "/^a{2,}$/";
echo preg_match($pattern, $str);

