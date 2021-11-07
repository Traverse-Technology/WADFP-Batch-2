<?php
if (isset($_COOKIE['email'])){
    setcookie("email",'',time()-3600);
    header("Location:login.php");
}else{
    header("Location:login.php");
}
