<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    
        // Obtenemos el número ingresado por el usuario
        $numero= $_GET['n1'];
        
        // Mostrar la tabla de multiplicar en una tabla HTML
        echo "<h2>Cuadrado y cubo del número: $numero</h2>";
        echo "<table border='1'>";
        for ($i = $numero; $i < $numero + 5; $i++) {
            $cuadrado = $i * $i;
            $cubo = $i * $i * $i;
            echo "<tr><td>$i</td><td>$cuadrado</td><td>$cubo</td></tr>";
            
        }
        echo "</table>";
    ?>
</body>
</html>

