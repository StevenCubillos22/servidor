<?php


#header("Location:pagina.php");

session_start();

if (isset($_SESSION["muestras"])){
   $_SESSION["muestras"] ++; 
} else {
    $_SESSION["muestras"] =0;
}

echo " Has hecho ".$_SESSION["muestras"]." visitas";


?>

<form method