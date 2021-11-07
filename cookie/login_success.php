<?php

if (isset($_COOKIE['email'])){
    echo $_COOKIE['email'];
}else{
    header("Location:login.php");
}
?>

<a href="logout.php">Logout</a>
