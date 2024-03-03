<?php
    session_start();
    include_once("Controlador.php");  

    // Miramos el valor de la variable "action", si existe. Si no, le asignamos una acción por defecto
    if (isset($_REQUEST["action"])) {
        $action = $_REQUEST["action"];
    } else {
        $action = "mostrarInicio";  // Acción por defecto
    }

    // Creamos un objeto de tipo GestorTareas y llamamos al método $action()
    $gestor = new Controlador();
    $gestor->$action();