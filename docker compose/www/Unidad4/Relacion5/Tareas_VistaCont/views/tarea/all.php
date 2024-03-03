<?php
// VISTA PARA LA LISTA DE TAREAS

// Recuperamos la lista de tareas  

$listaTareas = $data["listaTareas"];
$usuario= $_SESSION["usuario"];   //idUser??

// Ahora, la tabla con los datos de las tareas
if (count($listaTareas) == 0) {
  echo "No hay tareas";                      
} else {
  echo "<table border='3'>";
  echo "<tr>
          <th>ID</th>
          <th>Título</th>
          <th>Descripción</th>
        </tr>";

  foreach ($listaTareas as $fila) {
    echo "<tr>";
    echo "<td>" . $fila->id . "</td>";
    echo "<td>" . $fila->titulo . "</td>";
    echo "<td>" . $fila->descripcion . "</td>";
    echo "<td><a href='index.php?action=formularioModificarTarea&idTarea=" . $fila->id . "'>Modificar</a></td>";
    echo "<td><a href='index.php?action=borrarTarea&idTarea=" . $fila->id . "'>Borrar</a></td>";
    echo "</tr>";
  }
  echo "</table>";
}
echo "<p><a href='index.php?action=formularioInsertarTarea'>Nueva Tarea</a></p>";
?>