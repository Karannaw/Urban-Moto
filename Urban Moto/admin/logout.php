<?php
session_start();
ob_start();
unset($_SESSION['uid']);
unset($_SESSION['emailid']);

header('location:login.php');
?>