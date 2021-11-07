<?php
session_start();
if (isset($_SESSION['email'])){
    echo $_SESSION['email'];
}else{
    header("Location:login.php");
}
?>

<a href="logout.php">Logout</a>
