<?
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = hash("sha256", $_POST['password']);

    $sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$password')";

    if ($db->query($sql) === TRUE) {
        echo "El usuario y la contraseña introducida se ha registrado con éxito";
    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }
}

require 'views/registro.view.php';
?>