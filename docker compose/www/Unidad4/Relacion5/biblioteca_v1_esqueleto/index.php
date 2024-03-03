<!-- BIBLIOTECA VERSIÓN 1
     Características de esta versión:
       - Código monolítico (sin arquitectura MVC)
       - Sin seguridad
       - Sin sesiones ni control de acceso
       - Sin reutilización de código
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php

    // Miramos el valor de la variable "action", si existe. Si no, le asignamos una acción por defecto
    if (isset($_REQUEST["action"])) {
        $action = $_REQUEST["action"];
    } else {
        $action = "mostrarListaLibros";  // Acción por defecto//HECHO
    }

    if ($action == "mostrarListaLibros") { //HECHO
        mostrarListaLibros();
    }
    if ($action == "formularioInsertarLibros") {
        formularioInsertarLibros(); //HECHO
    }
    if ($action == "insertarLibro") {
        insertarLibro(); //HECHO
    }
    if ($action == "borrarLibro") {
        borrarLibro();
    }
    if ($action == "formularioModificarLibro") {
        formularioModificarLibro();
    }
    if ($action == "modificarLibro") {
        modificarLibro();
    }
    if ($action == "buscarLibros") {
        buscarLibros();
    }
    if ($action == "formularioInsertarAutores") {
        formularioInsertarAutores(); //HECHO
    }
    if ($action == "insertarAutor") {
        insertarAutor(); //HECHO
    }


    // --------------------------------- MOSTRAR LISTA DE LIBROS ----------------------------------------
    function mostrarListaLibros()
{
    echo "<h1>Biblioteca</h1>";

    // Conectar con la BD y verificar si hay libros.
    $db = new mysqli("db", "root", "test", "biblioteca");
    $result = $db->query("SELECT * FROM libros"); 
    // Verificar si hay libros.
    if ($result->num_rows != 0) {
        echo "
            <table>
              <thead>
                <tr>
                  <th>título</th>
                  <th>género</th>
                  <th>país</th>
                  <th>año</th>
                  <th>número de páginas</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
          ";

        while ($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td>{$row['titulo']}</td>
                <td>{$row['genero']}</td>
                <td>{$row['pais']}</td>
                <td>{$row['año']}</td>
                <td>{$row['numPaginas']}</td>
                <td><a href=\"index.php?action=modifyBookForm&book={$row['idLibro']}\"><svg id=\"modify-book-gear\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-settings\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z\" /><path d=\"M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0\" /></svg></a></td>
              </tr>
            ";
        }

        echo "
              </tbody>
            </table>
          ";

        // Muestra el formulario de búsqueda por título.
        echo "
            <form action=\"index.php?action=buscarLibro\" method=\"GET\">
                <label for=\"titulo\">Buscar por título:</label>
                <input type=\"text\" name=\"titulo\" id=\"titulo\" required>
                <input type=\"submit\" value=\"Buscar\">
            </form>
        ";

        // Agrega el botón para eliminar libros.
        echo "<div class=\"button-container\"><a href=\"index.php?action=removeBookForm\"><button>Eliminar libro</button></a></div>";
    } else {
        // No hay libros en la biblioteca.
        echo "No se encontraron datos disponibles";
    }

    // Enlace para agregar un nuevo libro.
    echo "<p><a href='index.php?action=formularioInsertarLibros'>Nuevo</a></p>";
}

    // --------------------------------- FORMULARIO ALTA DE LIBROS ----------------------------------------

    function formularioInsertarLibros() //si(?)
    {
        echo "<h1>Formulario de Inserción de Libros</h1>";
    
        $db = new mysqli("db", "root", "test", "biblioteca");
    
        // Verificar si hay autores disponibles antes de mostrar el formulario
        $resultAutores = $db->query("SELECT * FROM personas");
    
        if ($resultAutores->num_rows !== 0) {
            // Crear el formulario con los campos del libro
            echo "<form action='index.php' method='get'>
                        Título :<input type='text' name='titulo'><br>
                        Género :<input type='text' name='genero'><br>
                        País   :<input type='text' name='pais'><br>
                        Año    :<input type='text' name='año'><br>
                        Núm de páginas:<input type='text' name='numPaginas'><br>";
    
            // Añadir un select para seleccionar autores
            echo "Autores: <select name='autores[]' multiple>";
    
            while ($row = $resultAutores->fetch_assoc()) {
                echo "<option value='$row[idPersona]'>$row[nombre] $row[apellido]</option>";
            }
    
            echo "</select><br>";
    
            // Enlace para añadir nuevos autores
            echo "<a href='index.php?action=formularioInsertarAutores'>Añadir nuevo autor</a><br>";
    
            // Finalizar el formulario
            echo "<input type='hidden' name='action' value='insertarLibro'>
                <input type='submit'>
            </form>";
        } else {
            // Mensaje si no hay autores disponibles
            //echo "No hay autores disponibles. Por favor, añade al menos un autor antes de insertar un libro.";//
            // Enlace para añadir nuevos autores
            echo "<a href='index.php?action=formularioInsertarAutores'>Añadir nuevo autor</a><br>";
        }
    
        echo "<p><a href='index.php'>Volver</a></p>";
    }

    // --------------------------------- INSERTAR LIBROS ----------------------------------------

    function insertarLibro()
{
    echo "<h1>Alta de libros</h1>";

    // Vamos a procesar el formulario de alta de libros
    // Primero, recuperamos todos los datos del formulario (titulo, género...)
    $titulo = $_REQUEST["titulo"];
        $genero = $_REQUEST["genero"];
        $pais = $_REQUEST["pais"];
        $año = $_REQUEST["año"];
        $numPaginas = $_REQUEST["numPaginas"];
        $autores = $_REQUEST["autores"];


    $resultadoEscriben = true;

    $db = new mysqli("db", "root", "test", "biblioteca");
    $result = $db->query("INSERT INTO libros (titulo, genero, pais, año, numPaginas) VALUES (\"$titulo\", \"$genero\", \"$pais\", \"$año\", \"$numPaginas\")");

    // Lanzamos el INSERT contra la BD.
    if ($db->affected_rows == 1) {
        // Si la inserción del libro ha funcionado, continuamos insertando en la tabla "escriben"
        // Tenemos que averiguar qué idLibro se ha asignado al libro que acabamos de insertar
       
        $idLibroInsert = $db->insert_id;

        // Ya podemos insertar todos los autores junto con el libro en "escriben"
        foreach ($_GET['autores'] as $idPersona) {
            
            $resultadoEscriben = $db->query("INSERT INTO escriben (idPersona, idLibro) VALUES (\"$idPersona\", \"$idLibroInsert\")");
        }

        if ($resultadoEscriben) {
            echo "Libro insertado con éxito";
        } else {
            // Si la inserción en la tabla "escriben" ha fallado, eliminamos el libro previamente insertado
            $db->query("DELETE FROM libros WHERE idLibro = \"$idLibroInsert\"");
            echo "Ha ocurrido un error al insertar los autores. Por favor, inténtelo más tarde.";
        }
    } else {
        // Si la inserción del libro ha fallado, mostramos mensaje de error
        echo "Ha ocurrido un error al insertar el libro D:. Por favor, inténtelo más tarde.";
    }

    echo "<p><a href='index.php'>Volver</a></p>";
}

    // --------------------------------- BORRAR LIBROS ----------------------------------------

    function borrarLibro()
    {
        echo "<h1>Borrar libros</h1>";

        // Recuperamos el id del libro y lanzamos el DELETE contra la BD
        
        // Mostramos mensaje con el resultado de la operación
        
        

            $idLibro= $_REQUIRE['idLibro'];  
            $db = new mysqli("db", "root", "test", "biblioteca");

            $result = $db->query("DELETE FROM libros WHERE idLibro = \"$idLibro\"");

            if ($db->affected_rows == 0) {
                echo "Ha ocurrido un error al borrar el libro. Por favor, inténtelo de nuevo";
            } else {
                echo "Libro borrado con éxito";

            }

        echo "<p><a href='index.php'>Volver</a></p>";
    }

    // --------------------------------- FORMULARIO MODIFICAR LIBROS ----------------------------------------

    function formularioModificarLibro()
    {
        echo "<h1>Modificación de libros</h1>";

        $idLibro="";


        // Recuperamos el id del libro que vamos a modificar y sacamos el resto de sus datos de la BD
        if (isset($_GET['idLibro'])) {

            $idLibro= $_GET['idLibro'];
            $db = new mysqli("db", "root", "test", "biblioteca");

            $result = $db->query("SELECT FROM libros WHERE idLibro = \"$idLibro\"");
            
            $titulo = $libro['titulo'];
            $genero = $libro['genero'];
            $pais = $libro['pais'];
            $año = $libro['año'];
            $numPaginas = $libro['numPaginas'];

        // Creamos el formulario con los campos del libro
        echo "<form action='index.php' method='get'>
                        Título:<input type='text' name='titulo'><br>
                        Género:<input type='text' name='genero'><br>
                        País:<input type='text' name='pais'><br>
                        Año:<input type='text' name='ano'><br>
                        Número de páginas:<input type='text' name='numPaginas'><br>";
                 
            
        // y lo rellenamos con los datos que hemos recuperado de la BD
        

        // Vamos a añadir un selector para el id del autor o autores.
        // Para que salgan preseleccionados los autores del libro que estamos modificando, vamos a buscar
        // también a esos autores.
        
        // Vamos a convertir esa lista de autores del libro en un array de ids de personas
        
        
        // Ya tenemos todos los datos para añadir el selector de autores al formulario
        
        
        // Por último, un enlace para crear un nuevo autor
        echo "<a href='index.php?action=formularioInsertarAutores'>Añadir nuevo</a><br>";

        // Finalizamos el formulario
        echo "  <input type='hidden' name='action' value='modificarLibro'>
                    <input type='submit'>
                  </form>";
        echo "<p><a href='index.php'>Volver</a></p>";
    }

}

    // --------------------------------- MODIFICAR LIBROS ----------------------------------------

    function modificarLibro()
    {
        echo "<h1>Modificación de libros</h1>";

        // Vamos a procesar el formulario de modificación de libros
        // Primero, recuperamos todos los datos del formulario (idLibro, titulo....)
        $idLibro= $_REQUEST['idLibro'];
        $titulo= $_REQUEST['titulo'];
        $genero= $_REQUEST['genero'];
        $pais= $_REQUEST['pais'];
        $año= $_REQUEST['año'];
        $numPaginas= $_REQUEST['numPaginas'];
        $autores = $_REQUEST['autores'];

        
        // Lanzamos el UPDATE contra la base de datos.
        $db = new mysqli("db", "root", "test", "biblioteca");

        $result = $db->query("UPDATE libros SET titulo='$titulo', genero='$genero', pais='$pais', año='$año', numPaginas='$numPaginas' WHERE idLibro=$idLibro");
        
        
        if ($db->affected_rows == 1) {
            // Si la modificación del libro ha funcionado, continuamos actualizando la tabla "escriben".
            // Primero borraremos todos los registros del libro actual y luego los insertaremos de nuevo
            $db->query("DELETE FROM escriben WHERE idLibro=$idLibro");
            
            foreach ($autores as $autor) {
                $db->query("INSERT INTO escriben (idLibro, idAutor) VALUES ($idLibro, $autor)");
            }

            // Ya podemos insertar todos los autores junto con el libro en "escriben"
            
            echo "Libro actualizado con éxito";
        } else {
            // Si la modificación del libro ha fallado, mostramos mensaje de error
            echo "Ha ocurrido un error al modificar el libro. Por favor, inténtelo más tarde.";
        }
        echo "<p><a href='index.php'>Volver</a></p>";
    }

    // --------------------------------- BUSCAR LIBROS ----------------------------------------

    function buscarLibros()
    {
        // Recuperamos el texto de búsqueda de la variable de formulario
      

        $textoBusqueda = $_REQUEST['textoBusqueda'];
        echo "<h1>Resultados de la búsqueda: \"$textoBusqueda\"</h1>";

        $resultado =1 ;

        // Buscamos los libros de la biblioteca que coincidan con el texto de búsqueda
        $db = new mysqli("db", "root", "test", "biblioteca");
        
        if ($result = $db->query("SELECT * FROM libros WHERE titulo LIKE \"$textoBusqueda\"")) {

        //La consulta se ha ejecutado con éxito. Vamos a ver si contiene registros
          if ($result->num_rows != 0) { 
                  // La consulta ha devuelto registros: vamos a mostrarlos
                // Primero, el formulario de búsqueda
                echo "<form action='index.php' method='get'>";
            echo "<input type='hidden' name='action' value='buscarLibros'>";
            echo "<input type='text' name='textoBusqueda' value='$textoBusqueda'>";
            echo "<input type='submit' value='Buscar'>";
            echo "</form><br>";
                
                // Después, la tabla con los datos

                echo "<table>";
                while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['titulo'] . "</td>";
                // Agrega más campos según la estructura de tu tabla
                echo "</tr>";
                }
                echo "</table>";
        
            } else {
                // La consulta no contiene registros
                echo "No se encontraron datos";
            }
        } else {
            // La consulta ha fallado
            echo "Error al tratar de recuperar los datos de la base de datos. Por favor, inténtelo más tarde";
        }
        echo "<p><a href='index.php?action=formularioInsertarLibros'>Nuevo</a></p>";
        echo "<p><a href='index.php'>Volver</a></p>";
    }
    // --------------------------------- FORMULARIO Insetar Autores ----------------------------------------

    function formularioInsertarAutores()
    {
        echo "<h1>Insertar autores</h1>";

        echo "<form action = 'index.php' method = 'get'>
                    Nombre:<input type='text' name='nombre'><br>
                    Apellido:<input type='text' name='apellido'><br>";

        // Finalizamos el formulario
        echo "  <input type='hidden' name='action' value='insertarAutor'>
					<input type='submit'>
				</form>";
        echo "<p><a href='index.php'>Volver</a></p>";
    }
    // --------------------------------- INSERTAR autores ----------------------------------------


    function insertarAutor()
    {
        echo "<h1>Alta de autores</h1>";

        // Vamos a procesar el formulario de alta de libros
        // Primero, recuperamos todos los datos del formulario (nombre, apellido)
        
        $nombre= $_GET['nombre'];
        $apellido= $_GET['apellido'];
        
        $db = new mysqli("db", "root", "test", "biblioteca");

        

        // Lanzamos el INSERT contra la BD.
        $result = $db->query("INSERT INTO personas (nombre, apellido) VALUES (\"" . $_GET["nombre"] . "\", \"" . $_GET["apellido"] . "\")");
        
        if ($db->affected_rows == 1) {

            echo "Autor insertado con éxito";
        } else {
            // Si la inserción del libro ha fallado, mostramos mensaje de error
            echo "Ha ocurrido un error al insertar el autor. Por favor, inténtelo más tarde.";
        }
        echo "<p><a href='index.php'>Volver</a></p>";
    }
    ?>

</body>

</html>