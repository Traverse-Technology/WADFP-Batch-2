<?php
$myfile = fopen("test.txt","a");
fwrite($myfile, "This is file write");
fclose($myfile);