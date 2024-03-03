<?php
include_once "./Db.php";

// MODELO GENÉRICO

class Model {

  protected $table;     // Aquí guardaremos el nombre de la tabla a la que estamos accediendo
  protected $idColumn;  // Aquí guardaremos el nombre de la columna que contiene el id (por defecto, "id")
  protected $db;        // Y aquí la capa de abstracción de datos

  public function __construct()  {
    $this->db = new Db();
  }

  public function getAll() {
   
    $list = $this->db->dataQuery("SELECT * FROM ".$this->table);
                                                                                                    
    return $list;
  }
/*
  public function getAllTasksForUser($id) {
    
    $query = "SELECT tarea.id, titulo, descripcion FROM tarea 
    INNER JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea 
    INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id 
    WHERE usuarios.id = '$id'";
    $list = $this->db->dataQuery($query);

    return $list;
}  */

  public function get($id) { //consulta que obtiene algo especifico de la tabla usando el identificador
    $record = $this->db->dataQuery("SELECT * FROM ".$this->table." WHERE ".$this->idColumn."= $id");
    return $record;
  } 

  public function delete($id) {
    $result = $this->db->dataManipulation("DELETE FROM ".$this->table." WHERE ".$this->idColumn." = $id");
    return $result;
  }
}

?>