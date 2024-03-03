<?php

// CAPA DE ABSTRACCIÓN DE DATOS

class Db
{

  private $db; // Aquí guardaremos la conexión con la base de datos

  

  
  function __construct()
  {
    // Las constantes DBSERVER, DBUSER, DBPASS y DBNAME deben estar definidas en config.php
    require_once("config.php");
    $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    if ($this->db->connect_errno) return -1;
    else return 0;
  }

  

  function close()
  {
    if ($this->db) $this->db->close();
  }

  
  function dataQuery($sql)
  {
    $res = $this->db->query($sql);
    // Ahora vamos a convertir el resultado en un array convencional de PHP antes de devolverlo
    $resArray = array();
    while ($fila = $res->fetch_object()) {
      $resArray[] = $fila;
    }
    return $resArray;
  }

  
  function dataManipulation($sql)
  {
    $this->db->query($sql);
    return $this->db->affected_rows;
  }


  function prepare($sql) {
    return $this->db->prepare($sql);
  }
}