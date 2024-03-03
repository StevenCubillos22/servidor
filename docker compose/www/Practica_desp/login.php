<?php
$usuarios = array("Jorge", "Martos", "Pablo", "Javier");
$passwords = array("pass1", "pass2", "pass3", "pass4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    
    $usuarioValido = array_search($user, $usuarios);
    
    if ($usuarioValido !== false && $passwords[$usuarioValido] === $pass) {
        header("Location:contenido.php");
        exit();
    } else {
        echo "El usuario o la contraseña son incorrectos :((. Inténtalo de nuevo.";
    }
}
?>
