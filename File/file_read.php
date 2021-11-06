<?php
$myfile = fopen("test.txt","r");
echo fread($myfile,filesize("test.txt"));
fclose($myfile);