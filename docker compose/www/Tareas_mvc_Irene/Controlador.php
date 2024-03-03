<?php
include_once("models/Tarea.php");  // Modelos
include_once("models/Usuario.php");
include_once("View.php");

class Controlador {
    private $db;             // Conexión con la base de datos
    private $tarea, $usuario;// Modelos


    public function __construct() {
        $this->tarea = new Tarea();
        $this->usuario = new Usuario();
    }

    // --------------------------------- MOSTRAR INICIO ----------------------------------------
    public function mostrarInicio() { 
        if (!isset($_SESSION["usuario"])) { 
            View::render("Login/inicio");
            exit();
        } else {
            $this->mostrarListaTareas();
        }
    }
    // --------------------------------- MOSTRAR LOGIN ----------------------------------------
    public function login(){
        View::render("Login/login");
    }
    // --------------------------------- COMPROBAR LOGIN ----------------------------------------
    public function comprobarLogin(){
        if (isset($_POST['usuario']) && isset($_POST['password'])) {

            $usuario = strtolower($_POST['usuario']);
            $password = hash('sha512', $_POST['password']);
    
            try {
    
                //Comprobar si hay algun registro en el que coincida el usuario y la contraseña
                $resultado = $this->usuario->comprobarUsuario($usuario, $password);
    
                if ($resultado) {
                    //Guardar en la sesión el usuario y el id del usuario
                    var_dump($resultado);
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['idUsuario'] = $resultado[0]->id; //resultado tiene un array de objetos por eso se pone [0]
    
                    $this->mostrarListaTareas();
    
                } else {
                    echo "<script>alert('Usuario o contraseña incorrectos');</script>";
                    //Volver al formulario
                    $this->login();
                } 
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    // --------------------------------- MOSTRAR LISTA DE TAREAS DEL USUARIO ----------------------------------------
    public function mostrarListaTareas() {
        $id = $_SESSION['idUsuario'];
        $data["listaTareas"] = $this->tarea->obtenerTareasUsuario($id);
        View::render("Tareas/tablaTareas", $data);
    }

    // --------------------------------- CERRAR SESIÓN ---------------------------------------- 
    public function cerrarSesion(){
        session_destroy();

        $_SESSION = array(); //nos aseguramos que $_SESSION se queda vacía

        $this->mostrarInicio();
    }

    // --------------------------------- MOSTRAR REGISTRO ----------------------------------------
    public function registro(){
        View::render("Login/registro");
    }

    // --------------------------------- COMPROBAR REGISTRO ----------------------------------------
    public function comprobarRegistro(){
        if (isset($_POST["usuario"]) && isset($_POST["password"]) && isset($_POST["password2"])) {

            $usuario = strtolower($_POST["usuario"]);
            $password = hash('sha512' , $_POST["password"]);
            $password2 = hash('sha512' , $_POST["password2"]);
    
            if(strlen($usuario) > 20 || strlen($password)>200){
                echo "<script>alert('El usuario o la contraseña establecida son demasiado largos.');</script>";
                $this->registro();

            } else {
                if ($password == $password2) {
                    try {
        
                        //Buscar si hay un usuario existente
                        $resultado = $this->usuario->buscaUsuarioExistente($usuario);
            
                        if ($resultado) {
                            echo "<script>alert('El usuario ya existe');</script>";
                            //Volver al formulario
                            $this->registro();
                        } else {
                            //guardar el usuario en la base de datos
                            $this->usuario->insertarUsuario($usuario, $password);
                            //Ir al login
                            $this->login();
    
                        } 
                    } catch (exception $e) {
                        echo "Error: " . $e->getMessage();
                    }
                } else {
                    echo "<script>alert('Las contraseñas no coinciden');</script>";
                    $this->registro();
                }
            }
        }
    }

    // --------------------------------- SITIO FORMULARIO INSERTAR TAREA ---------------------------------
    public function mostrarInsertarTarea(){
        $data["noHayDatos"] = array(); //añadimos en data un array vacío para que funcione la vista del formulario
        View::render("Tareas/insertarModificarTarea", $data); 
    }
    // --------------------------------- ACCION DE INSERTAR TAREA ----------------------------------------
    public function accionInsertarTarea(){
        if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
            //Recuperamos los datos del formulario
            $titulo = $_POST["titulo"];
            $descripción = $_POST["descripcion"];
            $idUsuario = $_SESSION["idUsuario"];

            if(strlen($titulo) > 20 || strlen($descripción)>200){
                echo "<script>alert('No se ha podido insertar la tarea. Los caracteres escritos son mayores de lo permitido.');</script>"; 
                $this->mostrarInsertarTarea();
            } else {
                // Insertamos un nuevo registro con los datos.
                $resultado = $this->tarea->insertarNuevaTarea($titulo, $descripción);
        
                if ($resultado) {
        
                    // Tenemos que averiguar qué id de la tarea que se ha asignado 
                    $idTarea = $this->tarea->obtenerMaxId();
        
                    // Ahora insertamos en la tabla "usuarios_tarea" el id de la tarea y del usuario (parámetro)
                    $this->tarea->insertarUsuarioTarea($idTarea, $idUsuario);
                    echo "<script>alert('Tarea insertada con éxito');</script>";
                    $this->mostrarListaTareas();

                } else {
                    echo "<script>alert('Ha ocurrido un error al insertar la tarea. Por favor, inténtelo más tarde.');</script>";
                    $this->mostrarInsertarTarea();
                }
            }

        }
    }

    // --------------------------------- FORMULARIO DE MODIFICAR TAREA ----------------------------------------
    public function mostrarModificarTarea(){
        // Recuperamos los datos del libro a modificar pasados en el enlace para modificar
        $idTarea = $_REQUEST["idTarea"];
        $resultado = $this->tarea->obtenerDatos($idTarea);
        $data['tarea'] = $resultado[0];
        // Renderizamos la vista de inserción de libros, pero enviándole los datos del libro recuperado.
        View::render("Tareas/insertarModificarTarea", $data);
    }

    // --------------------------------------- ACCION DE MODIFICAR TAREA ----------------------------------------
    public function accionModificarTarea(){
        if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
            //Recuperamos los datos del formulario
            $idTarea = $_REQUEST["idTarea"];
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];

            if(strlen($titulo) > 20 || strlen($descripcion)>200){
                echo "<script>alert('No se ha podido modificar la tarea. Los caracteres escritos son mayores de lo permitido.');</script>";
                $this->mostrarListaTareas();
            } else {
                // Actualizamos el registro de la base de datos.
                $resultado = $this->tarea->modificarTarea($titulo, $descripcion, $idTarea);

                if ($resultado) {
                    echo "<script>alert('Tarea actualizada con éxito');</script>";
                    $this->mostrarListaTareas();
                } else {
                    echo "<script>alert('Ha ocurrido un error al modificar la tarea. Por favor, inténtelo de nuevo.');</script>";
                    $this->mostrarListaTareas();
                }
            }
        }
    }
    // --------------------------------------- MOSTRAR VISTA PARA VERIFICAR BORRADO -------------------------
    public function verificarBorrado(){
        $data['idTarea'] = $_REQUEST["idTarea"]; //le pasamos a la vista del formulario el id de la tarea
        View::render("Tareas/borrarTarea", $data);
    }

    // --------------------------------------- ACCION DE BORRAR TAREA ----------------------------------------
    public function borrarTarea(){
        // Recuperamos el id de la tarea
        $idTarea = $_REQUEST["idTarea"];

        //Borramos primero de la tabla usuarios_tarea
        $resultado = $this->tarea->borrarUsuariosTarea($idTarea);
        //Después borramos de la tabla tarea
        $resultado = $this->tarea->borrarDatos($idTarea);
    
        if ($resultado) {
            echo "<script>alert('Tarea borrada con éxito.');</script>";
            $this->mostrarListaTareas();
        } else {
            echo "<script>alert('Ha ocurrido un error al borrar la tarea. Por favor, inténtelo de nuevo.');</script>";
            $this->mostrarListaTareas();
        }
    }

    // --------------------------------------- MOSTRAR DESCRIPCION DE LA TAREA ----------------------------------------
    public function mostrarDescripcion(){
        // Recuperamos el id de la tarea
        $idTarea = $_REQUEST["idTarea"];

        //Realizamos la conexión a la base de datos para saber el título y la descripción
        $resultado = $this->tarea->obtenerDatos($idTarea);
        $data['tarea'] = $resultado[0];

        //Pasamos el resultado por medio de $data para que lo tenga la vista
        View::render("Tareas/mostrarDescripcion", $data);
    }
}
