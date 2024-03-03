<?php

include_once "Model.php";
class Tarea extends Model {

   //Atributos

   private $id;
   private $titulo;
   private $descripcion;


    // Constructor. Especifica el nombre de la tabla de la base de datos
    public function __construct(){
    
      $this->table = "tarea";
      $this->idColumn = "id"; //EL NOMBRE DE LA COLUMNA, NO EL DATO
      parent::__construct();
  }

  //Metodos


   // Devuelve el último id asignado en la tabla de tareas
   public function getMaxId(){
    
    $result = $this->db->dataQuery("SELECT MAX(id) AS ultimoIdTarea FROM tarea");
    return $result[0]->ultimoIdTarea;
  }

// Inserta un libro. Devuelve 1 si tiene éxito o 0 si falla.
    public function insert($titulo, $descripcion){

    return $this->db->dataManipulation("INSERT INTO tarea (titulo,descripcion) VALUES ('$titulo','$descripcion')");
  }


// Elimina los autores de un libro. Recibe el id del libro y la lista de ids de los autores en forma de array.
// Devuelve el número de autores insertados con éxito (0 en caso de fallo).
public function deleteTarea($idTarea){

    $correctos = 0;
    
    $sql = "DELETE FROM tarea WHERE id = $idTarea";
    $correctos = $this->db->dataManipulation($sql);
    return $correctos;
  }

  public function insertarUsuarioTarea($idTarea, $idUser){
    return $this->db->dataManipulation("INSERT INTO usuarios_tarea (tarea, usuario) VALUES ('$idTarea','$idUser')");
  }

  public function getAllTasksForUser($id) {
    
    $list = $this->db->dataQuery("SELECT tarea.id, titulo, descripcion FROM tarea 
                                    INNER JOIN usuarios_tarea ON tarea.id = usuarios_tarea.tarea 
                                    INNER JOIN usuarios ON usuarios_tarea.usuario = usuarios.id 
                                    WHERE usuarios.id = '$id'");
        return $list;
}

  public function deleteUsuariosTarea($idTarea){

    $correctos = 0;
    
    $sql = "DELETE FROM usuarios_tarea WHERE tarea = $idTarea";
    $correctos = $this->db->dataManipulation($sql);
    return $correctos;
  }


// Actualiza un tarea (todo menos sus autores). Devuelve 1 si tiene éxito y 0 en caso de fallo.
public function update($idtarea, $titulo, $descripcion){

    $ok = $this->db->dataManipulation("UPDATE tarea SET
                            titulo = '$titulo',
                            descripcion = '$descripcion'
                            WHERE id = '$idtarea'");
    return $ok;
}

public function modificarTarea($titulo, $descripcion, $idTarea){
  $list = $this->db->dataManipulation("UPDATE tarea SET
                          titulo = '$titulo',
                          descripcion = '$descripcion'
                          WHERE id = '$idTarea'");
  return $list;
}



   public function get_Id() {
       return $this->id;
   }

   public function set_Id($id) {
       $this->id = $id;
   }

   public function get_titulo() {
       return $this->titulo;
   }

   public function set_Titulo($titulo) {
       $this->titulo = $titulo;
   }

   public function get_Descripcion() {
       return $this->descripcion;
   }

   public function set_Descripcion($descripcion) {
       $this->descripcion = $descripcion;
   }
    

}