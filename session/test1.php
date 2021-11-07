<?php
session_start();
$color = "red";
$_SESSION['mycolor'] = $color;
header("Location:test2.php");
