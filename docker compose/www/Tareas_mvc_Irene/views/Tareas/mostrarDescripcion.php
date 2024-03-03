<?php
    extract($data);
    echo "<div class='principal'>";
    echo "<h1>Detalles sobre la tarea</h1><hr>";

    //Declaramos los datos de la tarea en el caso de que se hayan enviado, sino se quedan en blanco
    $titulo = $tarea->titulo; 
    $descripcion = $tarea->descripcion;

    echo "<h3>" . $titulo . "</h3>";
    echo "<p>" . $descripcion . "</p><br>";
    echo "<a href='index.php'>Volver</a>";
    echo "</div>";
