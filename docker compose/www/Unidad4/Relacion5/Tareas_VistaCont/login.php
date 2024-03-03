<?php          
session_start();
require_once 'config.php';
require_once 'Db.php';

$db = new Db();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = isset($_POST['username']) ? $_POST['username'] : '';
    $password = hash("sha256", $_POST['password']);
         
    $sql = "SELECT * FROM usuarios WHERE usuario=? AND password=?";
    try {
        $stmt = $db->prepare($sql);

        if ($stmt) {
            $stmt->bind_param('ss', $usuario, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['id'];  
                $_SESSION['usuario'] = $row['usuario'];
            } else {
                echo "Credenciales incorrectos";
            }

            $stmt->close();
        } else {
            throw new Exception("Error en la preparación de la declaración");
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        // Registra el error en el archivo de registro
        error_log("Error en el inicio de sesión: " . $e->getMessage(), 0);
    }
}

include 'views/login.view.php';
?>
