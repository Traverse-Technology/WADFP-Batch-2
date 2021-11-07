<?php
$filename = "upload/1636262442image1.jpg";
$myfile = fopen($filename,"r");
$data = fread($myfile,3);
$file_sing =  bin2hex($data);
echo $file_sing;
fclose($myfile);


if (strtoupper($file_sing) == "89504E" or strtoupper($file_sing) =="FFD8FF"){
echo "This is png or jpg";
}else{
    echo "This is not png or jpg";
}
