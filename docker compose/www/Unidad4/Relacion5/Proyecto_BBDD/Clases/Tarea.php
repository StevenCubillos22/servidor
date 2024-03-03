<?php


class Tarea {
    
    public $id;
    public $titulo;
    public $descripcion;
   


    function set_id($id) {
        $this->idLibro = $idLibro;
      }
      function get_id() {
        return $this->id;
      }
   #------------------
  

    function set_titulo($titulo) {
      $this->titulo = $titulo;
    }
    function get_titulo() {
      return $this->titulo;
    }
 #------------------
    function set_descripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    function get_descripcion() {
        return $this->descripcion;
    }

  
}