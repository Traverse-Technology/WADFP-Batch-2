<?php
$regemail = "maungmaung@gmail.com";
$regpassword = "123";

$logemail = "maungmaung@gmail.com";
$logpassword = "1234";
if ($regemail == $logemail){
    if ($regpassword == $logpassword){
        echo  "Email and password are valid";
    }else{
        echo  "Email is valid but password is not valid";
    }
}else{
    echo "Email Not found";
}