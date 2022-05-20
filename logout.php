<?php

// Thực hiện logic logout ở đây

session_start();
unset($_SESSION["logged"]);
header("Location: login.php");
die();
?>
