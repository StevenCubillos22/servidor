<?php
/**
 * En esta página se encuentra el código de que comprueba que el usuario conectado es "test" y su password es "test".
 * Si el usuario es test/test se mostrará la página de contenido.php. En caso contrario se mostrará la de registro.php. 
 * 
 * 
 * 
 * Al recuperar la password automáticamente se le aplicará un cifrado sha512.
 * 
 * 
 * 
 * Autor: Nombre Apellidos
 * 
 */

session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['password'])){

$usuario = $_SESSION['usuario'];
$password = $_SESSION['password'];


if ($usuario == "test" && $password == "test"){
    $_SESSION['usuario']=$usuario;
    header("Location:contenido.php");
    exit(); //termina el script despues de haberse redirigido
} else {
    header("Location:registro.php");
    exit();
  }
} else {
  header('views/login.view.php');
  exit();
}

?>