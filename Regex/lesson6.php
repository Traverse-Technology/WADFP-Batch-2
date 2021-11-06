<?php
$str = "banana";
//$pattern = "/^a{5}$/";
//$pattern = "/^a{2,5}$/";
$pattern = "/^ba(na){2}$/";
echo preg_match($pattern, $str);
