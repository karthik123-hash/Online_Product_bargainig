<?php
session_start();
$_SESSION['logged']="no";
header("Location: http://localhost/OBDM/Main/Main.php");
//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>