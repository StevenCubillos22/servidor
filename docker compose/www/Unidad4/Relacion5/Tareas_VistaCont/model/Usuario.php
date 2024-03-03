<?php

include_once "Model.php";
class Usuario extends Model {

    private $id;
    private $usuario;
    private $password;


    public function __construct() {
        $this->table = "usuarios";
        $this->idColumn = "id";
        parent::__construct();
    }

    

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


    public function checkUser($usuario, $password){
        return $this->db->dataQuery("SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'");
    }

    public function checkExistingUser($usuario){ //funcion que compruebe de que existe o no un usuario en la bbdd para evitar repetir
        return $this->db->dataQuery("SELECT * FROM usuarios WHERE usuario = '$usuario'");

    }

    

  // Inserta un usuario.
  public function insert($usuario, $password){
    return $this->db->dataManipulation("INSERT INTO " . $this->table . " (usuario, password) VALUES ('$usuario','$password')");
  }

  
}