<?php
/**
 * En esta página se encuentra el código de que comprueba que el usuario conectado es "test" y su password es "test".
 * Si el usuario es test/test se mostrará la página de contenido.php. En caso contrario se mostrará la de registro.php. 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * Autor: Nombre Apellidos
 * 
 */

session_start();

if (isset($_SESSION['number'])){

$number = $_SESSION['number'];

if ($number == "number"){
    $_SESSION['number']=$number;
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