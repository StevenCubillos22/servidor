<?php   
    extract($data); 

    echo "<div class='principal'>";
    echo "<h1>Borrar tarea</h1>";
    echo "<h3>¿Seguro que quieres borrar esta tarea?</h3>";

    echo "<div class='contenido'>";
    echo "<form action ='index.php'  method = 'post'>
    <input type='hidden' name='action' value='borrarTarea'>
    <input type='hidden' name='idTarea' value='".$idTarea."'>
    <button type='submit'>Si</button>
    </form>";
    echo "</div>";
    echo "<p><a href='index.php'>No, volver atrás</a></p>";
    echo "</div>";