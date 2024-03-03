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

if (isset($_POST['usuario']) && isset($_POST['password'])){

$usuario = strtolower($_POST['usuario']);
$password = $_POST['password'];

$_SESSION["usuario"] = strtolower($_POST['usuario']);
$_SESSION["password"] = $_POST['password'];
$password_almacenado = hash("sha512", $_SESSION["password"]);

if ($_SESSION["usuario"] === "test" && hash("sha512", "test") === $password_almacenado) {

    header('Location: contenido.php');
    
    
    //termina el script despues de haberse redirigido
} else {
    header('Location: registro.php');
    
  }
} 
require 'views/login.view.php';

?>