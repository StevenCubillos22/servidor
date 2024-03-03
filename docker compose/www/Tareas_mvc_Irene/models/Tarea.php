<?php

//MODELO DE TAREA

//Incluir el modelo genérico padre
include_once "Model.php";
//---------------------------------

class Tarea extends Model {

    //Constructor
    public function __construct(){
        parent::__construct();
        $this->table = "tarea";
        $this->idColumn = "id"; //Este es el nombre de la columna, NO EL DATO (para utilizarlo en los selects)
    }

    //Métodos
    // Devuelve el último id asignado en la tabla de tareas
    public function obtenerMaxId(){
        $result = $this->db->dataQuery("SELECT MAX(id) AS ultimoId FROM tarea");
        return $result[0]->ultimoId;
    }
    //Devuelve la insercción de una nueva tarea según un título y una descripción
    public function insertarNuevaTarea($titulo, $descripcion){
        return $this->db->dataManipulation("INSERT INTO tarea (titulo,descripcion) VALUES ('$titulo','$descripcion')");
    }
    //Devuelve la insercción de un usuario asignado a una tarea según el id de la tarea y el id del usuario
    public function insertarUsuarioTarea($idTarea, $idUsuario){
        return $this->db->dataManipulation("INSERT INTO usuarios_tarea (tarea, usuario) VALUES ('$idTarea','$idUsuario')");
    }

    public function borrarUsuariosTarea($idTarea){
        return $this->db->dataManipulation("DELETE FROM usuarios_tarea WHERE tarea = " . $idTarea);
    }
    //Devuelve la actualización de una tarea que va a ser modificada según el id de la tarea y sus nuevos datos
    public function modificarTarea($titulo, $descripcion, $idTarea){
        $ok = $this->db->dataManipulation("UPDATE tarea SET
                                titulo = '$titulo',
                                descripcion = '$descripcion'
                                WHERE id = '$idTarea'");
        return $ok;
    }
    //Devuelve las tareas correspondientes según el id de un usuario
    public function obtenerTareasUsuario($id){
        $ok = $this->db->dataQuery("SELECT tarea.id, titulo, descripcion FROM tarea 
                                    INNER JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea 
                                    INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id 
                                    WHERE usuarios.id = '$id'");
        return $ok;
    }
}
?>