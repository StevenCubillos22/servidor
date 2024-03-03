<?php
session_start(); 

include_once("GestiTarea.php");

    if (isset($_REQUEST["action"])) {
        $action = $_REQUEST["action"];
    } else {       
        $action = "mostrarInicio";  // Acción por defecto que se realiza
    }

    $tareita = new GestiTarea();
    $tareita->$action();

?>
