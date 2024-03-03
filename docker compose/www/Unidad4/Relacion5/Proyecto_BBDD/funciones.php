<?php
require_once 'config.php';
require_once 'Clases/Tarea.php';
require_once 'Clases/Usuario.php';

function mostrarListaTareas($db){

       $idUsuario = $_SESSION['id'];
    
        $sql = "SELECT tarea.id AS idtarea, titulo, descripcion
        FROM usuarios_tarea
        INNER JOIN tarea ON usuarios_tarea.tarea = tarea.id 
        INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id
        WHERE usuarios_tarea.usuario = $idUsuario
        ORDER BY tarea.titulo";
        // Buscamos todos las tareas
        if ($result = $db->query($sql)) {

            // La consulta se ha ejecutado con éxito. Vamos a ver si contiene registros
            if ($result->num_rows != 0) {
                // La consulta ha devuelto registros: vamos a mostrarlos

                // Ahora, la tabla con los datos de los tareas
                echo "<table border='2'>";
                echo "<tr>
                    
                    <th>Título</th>
                    <th>Descripción</th>
                    </tr>";

                while ($fila = $result->fetch_object("Tarea")) {  
                     echo "<tr>";
                     echo "<td>" . $fila->get_titulo() . "</td>";
                     echo "<td>" . $fila->get_descripcion() . "</td>";
            
            // Enlace para modificar 
            echo "<td><a href='tarea.view.php?action=formularioModificarTarea&idTarea=" . $fila->get_id() . "'>Modificar</a></td>";

            // Enlace para borrar
            echo "<td><a href='tarea.view.php?action=borrarTarea&idtarea=" . $fila->get_id() . "'>Borrar</a></td>";

            echo "</tr>";
                }
                echo "</table>";
            } else {
                
                echo "<br> Aún no tienes tareas escritas por tí. ";
            }
        } else {
            // Fallo en la consulta
            echo "Error al tratar de recuperar los datos de la base de datos. Por favor, inténtelo de nuevo";
        }
        echo "<p><a href='tarea.view.php?action=formularioInsertarTareas'>Nuevo</a></p>";
    }

    

    // --------------------------------- FORMULARIO ALTA DE TAREAS ----------------------------------------

    function formularioInsertarTareas($db){
    
        echo "<h1>Creación de Tareas</h1>";

        $nuevaTarea = new Tarea();

    // Creamos el formulario con los campos de la tarea
    echo "<form action='tarea.view.php' method='post'>
                Título:<input type='text' name='titulo' value='" . $nuevaTarea->get_titulo() ."'><br>
                Descripción:<input type='text' name='descripcion' value='" . $nuevaTarea->get_descripcion() ."'><br>";

        
                echo "<input type='hidden' name='usuario' value='" . $_SESSION['id'] . "'><br>";

        // Finalizamos el formulario
        echo "<input type='hidden' name='action' value='insertarTarea'>
          <input type='submit'>
          </form>";
        echo "<p><a href='tarea.view.php'>Volver</a></p>";
    }

    /* function formularioInsertarTareas($db) {
    echo "<h1>Creación de Tareas</h1>";

    // Creamos un objeto Tarea para manejar los datos
    $nuevaTarea = new Tarea();

    // Creamos el formulario con los campos de la tarea
    echo "<form action='tarea.view.php' method='post'>
                Título:<input type='text' name='titulo' value='" . $nuevaTarea->get_titulo() . "'><br>
                Descripción:<input type='text' name='descripcion' value='" . $nuevaTarea->get_descripcion() . "'><br>";

    echo "<input type='hidden' name='usuario' value='" . $_SESSION['id'] . "'><br>";

    // Finalizamos el formulario
    echo "<input type='hidden' name='action' value='insertarTarea'>
          <input type='submit'>
          </form>";
    echo "<p><a href='tarea.view.php'>Volver</a></p>";
} */

    // --------------------------------- INSERTAR TAREA ----------------------------------------

    function insertarTarea($db){
    
        echo "<h1>Alta de Tareas</h1>";

        
        // Recuperamos todos los datos del formulario
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $usuario = $_POST["usuario"];

        // Creacion de objetos

        $nuevaTarea = new Tarea();
        $nuevaTarea->set_titulo($titulo);
        $nuevaTarea->set_descripcion($descripcion);



        $sql = "INSERT INTO tarea (titulo, descripcion) VALUES ('$titulo', '$descripcion')";
        $db->query($sql);
        
        if ($db->affected_rows == 1) {
            
            $idTarea = $db->insert_id;
            $idUsuario = $_SESSION['id'];
            
                $db->query("INSERT INTO usuarios_tarea(tarea, usuario) VALUES('$idTarea', '$usuario')");
            
            echo "Tarea insertado con éxito";
        } else {
            
            echo "Ha ocurrido un error al insertar la tarea. Por favor, inténtelo de nuevo.";
            

        }
        echo "<p><a href='tarea.view.php'>Volver</a></p>";
    }

    // --------------------------------- BORRAR TAREA ----------------------------------------

    function borrarTarea($db){
    
        echo "<h1>Borrar tarea</h1>";

        $idTarea = $_REQUEST["idtarea"];
        $sql = "DELETE FROM usuarios_tarea WHERE tarea = '$idTarea'";
        $db->query("$sql");

        $sql2 = "DELETE FROM tarea WHERE id = '$idTarea'";
        $db->query("$sql2");

        
        if ($db->affected_rows == 0) {
            echo "Ha ocurrido un error al borrar la tarea. Por favor, inténtelo de nuevo";
        } else {
            echo "La tarea se ha borrado con éxito ";
        }
        echo "<p><a href='tarea.view.php'>Volver</a></p>";
    }                                                 

    // --------------------------------- FORMULARIO MODIFICAR TAREAS ----------------------------------------

    function formularioModificarTarea($db){
    
        echo "<h1>Modificación de Tarea</h1>";

        $idTarea = $_REQUEST["idTarea"];
        $sql = "SELECT * FROM tarea WHERE tarea.id = '$idTarea'";
        $result = $db->query($sql);
        $tarea = $result->fetch_object("Tarea"); //fetch_object("Tarea")

        //Creamos el objeto e invocaremos sus setters al ser una modificacion

        $tareaModificar = new Tarea();
        $tareaModificar->set_id($tarea->get_id());
        $tareaModificar->set_titulo($tarea->get_titulo());
        $tareaModificar->set_descripcion($tarea->get_descripcion());

        
        echo "<form action='tarea.view.php' method='post'>
                <input type='hidden' name='idTarea' value='" . $tareaModificar->get_id() . "'>
                Título:<input type='text' name='titulo' value='" . $tareaModificar->get_titulo() . "'><br>
        Descripción:<input type='text' name='descripcion' value='" . $tareaModificar->get_descripcion() . "'><br>";

       
        $todosLosUsuarios = $db->query("SELECT * FROM usuarios");  // Obtener todos los usuarios
        $usuarioTarea = $db->query("SELECT usuario FROM usuarios_tarea WHERE tarea = '$idTarea'"); // Obtener el usuario de la tarea que estamos buscando
        
        echo "<input type='hidden' name='usuario' value='" . $_SESSION['id'] . "'>";

        // Finalizamos el formulario
        echo "<input type='hidden' name='action' value='modificarTarea'>
            <input type='submit'>
            </form>";
        echo "<p><a href='tarea.view.php'>Volver</a></p>";
    }


    // --------------------------------- MODIFICAR TAREA ----------------------------------------

    function modificarTarea($db){
    
        echo "<h1>Modificación de Tareas</h1>";

        // Recuperamos todos los datos del formulario
        $idTarea = $_POST["idTarea"];
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $usuario = $_POST["usuario"];

        //OBJETOS

        $tareaModificar = new Tarea();
        $tareaModificar->set_id($idTarea);
        $tareaModificar->set_titulo($titulo);
        $tareaModificar->set_descripcion($descripcion);
        
        //
        $sql = "UPDATE tarea SET
                titulo = '$titulo',
                descripcion = '$descripcion'
                WHERE id = '$idTarea'";

        $db->query($sql);
                
        if ($db->affected_rows == 1) {
            // Actualizamos la relación entre usuarios y tareas
            //QUERY DE PRUEBA, NO ES SEGURO!!
            $db->query("UPDATE usuarios_tarea SET usuario = '$usuario' WHERE tarea = '$idTarea'");
            echo "Tarea actualizado con éxito";
        } else {
            // Mensaje de error.
            echo "Ha ocurrido un error al modificar la tarea. Por favor, inténtelo más tarde.";
        }
        echo "<p><a href='tarea.view.php'>Volver</a></p>";
    }

    ?>