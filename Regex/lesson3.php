<?php
$str = "a.b";
//$pattern = "/cat|fish/";
//$pattern = "/a.b/";
//$pattern = "/^cat/";
//$pattern = "/^cat fox$/";
//$pattern = "/\w/";
$pattern = "/a\.b/";
echo preg_match($pattern, $str);

