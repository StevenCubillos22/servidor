<?php
session_start();
session_destroy();

$_SESSION['jugador1']= array();
$_SESSION['jugador2']= array();

header("Location: index.php");

?>


