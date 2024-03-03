<?php

class Autor {

   private $idPersona;
   private $nombre;
   private $apellido;
    
    public function __construct(){

  }

  public function get_idPersona() {
    return $this->idPersona;
  }
 

  public function set_nombre($nombre) {
      $this->nombre = $nombre;
    }

  public function get_nombre() {
      return $this->nombre;
    }
#------------------
  public function set_apellido($apellido) {
        $this->apellido = $apellido;
    }

  public function get_apellido() {
        return $this->apellido;
    }

}


?>