<?php
session_start();
unset($_SESSION['SESS_FIRST_NAME']); // unset session variable
session_destroy(); // destroy session
header("location:../index.php");
?>