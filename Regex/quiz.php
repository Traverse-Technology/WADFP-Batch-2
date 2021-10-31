<?php
$str = "d4";
//$pattern = "/a-m|0_9/";
//$pattern = "/a-m|0_9/";
//$pattern ="/[0-9] and [a-m] /";
$pattern = "/[a-m]#[0-9]/";
//$pattern = "/[a-m][0-9]/";
echo preg_match($pattern, $str);