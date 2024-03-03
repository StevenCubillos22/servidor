<?php

// MODELO DE USUARIOS

include_once "Model.php";

class Usuario extends Model {

    // Constructor. Conecta con la base de datos.
    public function __construct() {
        parent::__construct();
        $this->table = "usuarios";
        $this->idColumn = "id";
    }

    // Busca un usuario según su nombre y su contraseña (para comprobar el login)
    public function comprobarUsuario($usuario, $password){
        return $this->db->dataQuery("SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'");
    }
    
    //Busca si existe un usuario según su nombre para saber si se puede registrar o no
    public function buscaUsuarioExistente($usuario){
        return $this->db->dataQuery("SELECT * FROM usuarios WHERE usuario = '$usuario'");
    }


    // Inserta un Usuario en el registro
    public function insertarUsuario($usuario, $password){
        return $this->db->dataManipulation("INSERT INTO " . $this->table . " (usuario, password) VALUES ('$usuario','$password')");
    }
}