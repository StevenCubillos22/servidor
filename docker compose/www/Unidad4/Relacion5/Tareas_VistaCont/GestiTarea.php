<?php
include_once("model/Tarea.php");
include_once("model/Usuario.php");
include_once("model/Model.php");

include_once("View.php");

class GestiTarea {

    private $db;             // Conexión con la base de datos
    private $tarea, $usuario;// Modelos

    public function __construct() {
        $this->tarea = new Tarea();
        $this->usuario = new Usuario();
    }


    public function mostrarInicio() { //yep
        if (!isset($_SESSION["logueado"])) { 
            View::render("indice");
            exit();
        } else {
            echo "Usuario logueado. ID de usuario: " . $_SESSION['idUser'];
            $this->mostrarHeader();
            $this->mostrarNav();
            $this->mostrarListaTareas();
            $this->mostrarFooter();
        }
    }



    public function registro(){ //yep
        View::render("registro.view");
    }

    public function comprobarRegistro(){
        if (isset($_POST["usuario"]) && isset($_POST["password"]) && isset($_POST["password2"])) {

            $usuario = strtolower($_POST["usuario"]);
            $password = hash('sha512' , $_POST["password"]);
            $password2 = hash('sha512' , $_POST["password2"]);
    
            if(strlen($usuario) > 20 || strlen($password)>200){
                echo "<script>alert('El usuario o la contraseña puesta ocupa muchos caracteres.');</script>";
                $this->registro();

            } else {
                if ($password == $password2) {
                    try {
        
                        $result = $this->usuario->checkExistingUser($usuario);
            
                        if ($result) {
                            echo "<script>alert('El usuario ya existe');</script>";
                            $this->registro();
                        } else {
                            
                            $this->usuario->insert($usuario, $password);
                            "<script>alert('Usuario creado');</script>";
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

    public function login(){ //yep
        View::render("login.view");
    }


    public function cerrarSesion(){ //yep
        session_destroy();
        $_SESSION = array(); 

        $this->mostrarInicio();
    }





    public function comprobarLogin(){ //yep
        if (isset($_POST['usuario']) && isset($_POST['password'])) {

            $usuario = strtolower($_POST['usuario']);
            $password = hash('sha512', $_POST['password']);

            try {

                $result = $this->usuario->checkUser($usuario, $password);
                
                if ($result) {
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['idUser'] = $result[0]->id;

                    $this->mostrarListaTareas();

                } else {
                    echo "Algo malo ha pasado con el login D:";
                    $this->login();
                }

            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

    }

    public function mostrarListaTareas() {  //yep

            $id = $_SESSION['idUser'];
            $data["listaTareas"] = $this->tarea->getAllTasksForUser($id);
            View::render('tarea/all', $data);
        
    }

    // --------------------------------- FORMULARIO ALTA DE TAREAS ---------------------------------------

    public function formularioInsertarTarea() { //yep
            $data["noData"] = array();  // Array vacío (la tarea aún no tiene usuario asignados)
            View::render("Tarea/form", $data);
     }
    
    // --------------------------------- INSERTAR TAREA ----------------------------------------

    public function insertarTarea() { //yep

        if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
            // Primero, recuperamos todos los datos del formulario
            $titulo = $_REQUEST["titulo"];
            $descripcion = $_REQUEST["descripcion"];
            $idUsuario = $_SESSION["idUser"];      

            $result = $this->tarea->insert($titulo, $descripcion);
            if ($result) {  
               
                $id = $this->tarea->getMaxId();

                $this->tarea->insertarUsuarioTarea($id, $idUsuario);
                    echo "<script>alert('La tarea se pudo insertar con éxito');</script>";
                    $this->mostrarListaTareas();
                
            } else {
                echo "<script>alert('Ha ocurrido un error.');</script>";
                $this->formularioInsertarTarea();
            }
        }
    }

    // --------------------------------- BORRAR TAREA ----------------------------------------

    
    public function borrarTarea() { //donse
        
            // Recuperamos el id del tarea que hay que borrar
            $idTarea = $_REQUEST["idTarea"];
            // Pedimos al modelo que intente borrar el libro
            $result = $this->tarea->deleteUsuariosTarea($idTarea);
            $result = $this->tarea->deleteTarea($idTarea);

            if ($result) {
                echo "<script>alert('La tarea fue borrada sin problemas.');</script>";
                $this->mostrarListaTareas();
            } else {
                echo "<script>alert('Error producido a la hora de borrarlo.');</script>";
                $this->mostrarListaTareas();
            }

            /*
            $data["listaTareas"] = $this->tarea->getAll();
            View::render("tarea/all", $data); */

        
    }

    // --------------------------------- FORMULARIO MODIFICAR TAREAS -------------------------------

    public function formularioModificarTarea() { //yep

            // Recuperamos los datos de la tarea a modificar
            $idTarea = $_REQUEST["idTarea"];
            $result = $this->tarea->get($idTarea);
            $data["tarea"] = $result[0];
            
            View::render("tarea/form", $data);

    } 

    // --------------------------------- MODIFICAR TAREA ----------------------------------------

    public function modificarTarea(){ //done

        if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    
        echo "<h1>Modificación de Tareas</h1>";

        // Recuperamos todos los datos del formulario
        $idTarea = $_REQUEST["idTarea"];
        $titulo = $_REQUEST["titulo"];
        $descripcion = $_REQUEST["descripcion"];


        $result = $this->tarea->modificarTarea($titulo, $descripcion, $idTarea);

                if ($result) {
                    echo "<script>alert('Tarea actualizada !');</script>";
                    $this->mostrarListaTareas();
                } else {
                    echo "<script>alert('No se ha modificado bien.');</script>";
                    $this->mostrarListaTareas();
                }

        }

    }

}

?>