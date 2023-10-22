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
        echo "<h2>Tabla de Multiplicar del $numero</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td> x </td>";
            echo "<td>$i</td>";
            echo "<td> = </td>";
            echo "<td>" . ($numero * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
