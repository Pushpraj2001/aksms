<?php
session_start();
unset($_SESSION['ROLE']);
unset($_SESSION['IS_LOGIN']);
header('location:login.php');
die();
?>