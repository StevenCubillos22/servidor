<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = isset($_POST['username']) ? $_POST['username'] : '';
    $password = hash("sha256", $_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE usuario=? AND password=?";
    $stmt = $db->prepare($sql); //objeto de declaración que usaremos para ejecutar la consulta posteriormente
    $stmt->bind_param('ss', $usuario, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];  
        $_SESSION['usuario'] = $row['usuario'];
        header("Location: tarea.php");
    } else {
        echo "Credenciales incorrectos";
    }
}

include 'views/login.view.php';
  ?>