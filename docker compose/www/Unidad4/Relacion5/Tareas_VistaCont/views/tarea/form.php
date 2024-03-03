<?php
// VISTA PARA INSERCIÓN/EDICIÓN DE TAREAS

extract($data);   // Extrae el contenido de $data y lo convierte en variables individuales ($tarea, $todosLosUsuarios y $usuariosTarea)
//echo extract($data);
//echo (int)$usuariosTarea[0]->idPersona;
// Vamos a usar la misma vista para insertar y modificar. Para saber si hacemos una cosa u otra,
// usaremos la variable $tarea: si existe, es porque estamos modificando una tarea. Si no, estamos insertando una nueva.
if (isset($tarea)) {   
    echo "<h1>Modificación de tareas</h1>";
} else {
    echo "<h1>Inserción de tareas</h1>";
}

// Sacamos los datos de la tarea (si existe) a variables individuales para mostrarlo en los inputs del formulario.
// (Si no hay tarea, dejamos los campos en blanco y el formulario servirá para inserción).
$idTarea = $tarea->id ?? ""; 
$titulo = $tarea->titulo ?? "";
$descripcion = $tarea->descripcion ?? "";          

// Creamos el formulario con los campos de la tarea
echo "<form action='index.php' method='post'>
        <input type='hidden' name='idTarea' value='$idTarea'>
        Título:       <input type='text' name='titulo' value='$titulo'><br>
        Descripción: <textarea name='descripcion'>$descripcion</textarea><br>";
   
// Finalizamos el formulario
if (isset($tarea)) {
    echo "  <input type='hidden' name='action' value='modificarTarea'>";
} else {
    echo "  <input type='hidden' name='action' value='insertarTarea'>";
}
echo "	<input type='submit'></form>";
echo "<p><a href='index.php'>Volver</a></p>";
?>
