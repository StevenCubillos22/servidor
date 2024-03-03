<?php
//Extraemos los datos de la tarea para la modificación en el caso de que se hayan enviado
extract($data); 

echo "<div class='principal'>";

//Establecemos el título según sea modificar o insertar
if (isset($data['tarea'])) {   
    echo "<h1>Modificar tarea</h1>";
} else {
    echo "<h1>Inertar nueva tarea</h1>";
}

//Declaramos los datos de la tarea en el caso de que se hayan enviado, sino se quedan en blanco
$idTarea = $tarea->id ?? ""; 
$titulo = $tarea->titulo ?? "";
$descripcion = $tarea->descripcion ?? "";

echo '
    <div class="contenido">
        <form action="index.php" method="post">
        <input type="hidden" name="idTarea" value="'.$idTarea.'">
        Título:<input type="text" name="titulo" value="'.$titulo.'" required><br><br>
        Descripción:<br><textarea name="descripcion" rows="6" cols="35" required>'.$descripcion.'</textarea><br><br>
';

// Finalizamos el formulario
if (isset($tarea)) {
    echo "<input type='hidden' name='action' value='accionModificarTarea'>";
} else {
    echo "<input type='hidden' name='action' value='accionInsertarTarea'>";
}
echo "<button type='submit'>Enviar</button>
        </form>
        </div>
        <p><a href='index.php?action=mostrarListaTareas'>Volver</a></p>
    </div>";

