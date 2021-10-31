<?php
function emailValidate($email){
    $pattern = "/^\w{3,}@\w+\.[a-z]{2,3}$/";
    return preg_match($pattern, $email);
}

echo emailValidate("msd@gmail.com");

