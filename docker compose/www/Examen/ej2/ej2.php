<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$horario = array(
    'Lunes' => Array("Entorno Cliente",
                     "Entorno Cliente",
                     "Entorno Cliente",
                     "Entorno Servidor",
                     "Entorno Servidor",
                     "Entorno Servidor"),


    'Martes' => Array("Entorno Cliente",
                     "Entorno Cliente",
                     "Entorno Cliente",
                     "Despliegue de Aplicaciones",
                     "Despliegue de Aplicaciones",
                     "Despliegue de Aplicaciones"),


    'Miercoles' => Array("Entorno Servidor",
                        "Entorno Servidor",
                        "Diseño",
                        "Diseño",
                        "Diseño",
                        "Empresa e Iniciativa Emprendedora"),

    'Jueves' =>  Array("Entorno Servidor",
                       "Entorno Servidor",
                       "Entorno Servidor",
                       "Empresa e Iniciativa Emprendedora",
                       "Empresa e Iniciativa Emprendedora",
                       "Empresa e Iniciativa Emprendedora"),



    'Viernes' => Array("Python",
                       "Python",
                       "Python",
                       "Entorno Cliente",
                       "Entorno Cliente",
                       "Entorno Cliente")
);



// Mostramos  los resultados en cinco columnas
echo "<table border='2'>";
echo "<tr><th> LUNES </th><th> MARTES </th><th> MIÉRCOLES </th><th> JUEVES </th><th> VIERNES </th></tr>";

foreach ($horario as $fecha => $clases) { //deberia mostarse correctamente, pero me muestra el horario del dia por fila y no por el dia que corresponde
    echo "<>"; //Esto consiste en meter un bucle dentro de otro actuando como bidimensional para que pueda recorrer perfectamente
    foreach ($clases as $claseRecorrido) {
        echo "<td>$claseRecorrido</td>";
    }
    echo "</tr>";
}

echo "</table>";




?>
    
</body>
</html>