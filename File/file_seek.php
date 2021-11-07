<?php
$myfile = fopen("test.txt", "r");
echo fread($myfile, filesize("test.txt"))."<br>";
fseek($myfile,1);
echo fread($myfile, filesize("test.txt"));
fclose($myfile);