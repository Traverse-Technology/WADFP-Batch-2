<?php
session_start();
if (isset($_SESSION['mycolor'])) {
    echo $_SESSION['mycolor'];
}
