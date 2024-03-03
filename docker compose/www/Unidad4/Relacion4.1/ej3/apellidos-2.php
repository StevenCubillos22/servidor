<?php
session_start();

if(isset($_POST['apellidos']) && !empty($_POST['apellidos'])){
    $_SESSION['apellidos'] = $_POST['apellidos'];
    header("Location: index.html");
} else {
    header("Location: apellidos-1.php?error=1");
}
?>   
