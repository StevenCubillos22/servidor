<?php
session_start();
session_destroy();

$_SESSION = array(); // Vaciamos la sesion con este método;

header("Location: login.php");
?>