<?php
require_once 'config.php';
session_start();

if (isset($_SESSION['id'])) {
   
    header("Location: views/tarea/all.php") ;

} else {
    header("Location: views/login.view.php");
                                     
}
?>