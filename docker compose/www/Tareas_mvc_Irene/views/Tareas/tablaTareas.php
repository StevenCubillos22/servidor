<?php
//VISTA DE LA TABLA CON LA LISTA DE TAREAS DE UN USUARIO

//Recuperar los datos de las tareas y el usuario
$listaTareas = $data["listaTareas"];
$usuario = $_SESSION["usuario"];
//_______________________________________________

    if (count($listaTareas) > 0) {
        // La consulta ha devuelto registros
        echo "<div class='principal'>";
        echo "<div>";
        echo "<h1>Lista de tareas pendientes</h1>";
        echo "<img src='./img/colgar.png' width='180px' class='colgante'>";
        //header de la tabla
        echo "<table border ='3'>";
            echo "<th>Id tarea</th>";
            echo "<th>Título</th>";
            echo "<th>Descripción</th>";
        //datos de la tabla
        foreach ($listaTareas as $fila){
            echo "<tr>";
            echo "<td>" . $fila->id . "</td>";
            echo "<td><a href='index.php?action=mostrarDescripcion&idTarea=" . $fila->id . "'>" . $fila->titulo . "</a></td>";
            //En la descripción primero acortamos el texto a 20 caracteres y después dependiendo del tamaño de la descripción original
            //ponemos 3 puntos en el caso de que sea mayor de 20
            echo "<td>" . substr($fila->descripcion, 0, 20) . (strlen($fila->descripcion) > 20 ? "..." : "") . "</td>";
            //poner acciones de borrar y modificar
            echo "<td style='background-color: rgb(110, 151, 194);'><a class='boton' href='index.php?action=mostrarModificarTarea&idTarea=" . $fila->id . "'>Modificar</a></td>";
            echo "<td style='background-color: rgb(110, 151, 194);'><a class='boton' href='index.php?action=verificarBorrado&idTarea=" . $fila->id . "'>Borrar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    } else {
        // La consulta no contiene registros
        echo "<div class='principal'><p>No tienes tareas pendientes</p>";
    }
echo "<br><div class='boton'>";
echo "<a class='boton' href='index.php?action=mostrarInsertarTarea'>Nuevo</a>";
echo "</div>";
echo "</div>";
echo  "<div class='principal'><a href='index.php?action=cerrarSesion'>Cerrar Sesión</a></div>";
echo "<br><br>";