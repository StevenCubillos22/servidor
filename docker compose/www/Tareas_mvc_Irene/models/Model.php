<?php

include_once "db.php";

// MODELO GENÉRICO

class Model {

  //Atributos
  protected $table;    // Aquí guardaremos el nombre de la tabla a la que estamos accediendo
  protected $idColumn; // Aquí guardaremos el nombre de la columna que contiene el id (por defecto, "id") puede ser también idPersona, idLibro, etc, etc
  protected $db;       // Y aquí la capa de abstracción de datos

  //Constructor
  public function __construct()  {
    $this->db = new Db();
  }

  //Métodos
  public function obtenerTodo() { //Seleccionar todos los datos de una tabla
    $list = $this->db->dataQuery("SELECT * FROM " . $this->table);
    return $list;
  }

  public function obtenerDatos($id) { //Seleccionar datos específicos según un id
    $record = $this->db->dataQuery("SELECT * FROM " . $this->table . " WHERE ".$this->idColumn."= $id"); 
    return $record;
  } 

  public function borrarDatos($id) { //Borrar datos específicos según un id
    $result = $this->db->dataManipulation("DELETE FROM " . $this->table . " WHERE ".$this->idColumn." = $id");
    return $result;
  }
}