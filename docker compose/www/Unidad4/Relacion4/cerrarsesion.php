<?php
/**
 * En esta página se encuentra el código necesario para cerrar la sesión y eliminar la información que haya almacenada en la sesión.
 * 
 * Autor: Nombre Apellidos
 * 
 */

 session_start();
 session_destroy();

 echo "<h3>La sesión está cerrada</h3>";
 echo "<a href = \"index.php\"><button>Volver</button></a>";

 
?>