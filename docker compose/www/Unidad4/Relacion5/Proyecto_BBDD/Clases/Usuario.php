<?php

class Usuario {
    
    
    public $usuario;
    public $password;
    public $id; 
    
   
    function set_usuario($usuario) {
        $this->usuario = $usuario;
      }
      function get_usuario() {
        return $this->usuario;
      }
   #------------------
      function set_password($password) {
          $this->password = $password;
      }
      function get_password() {
          return $this->password;
      }

    #------------------
    function set_id($id) {
        $this->idLibro = $idLibro;
      }
      function get_id() {
        return $this->id;
      }

  
}