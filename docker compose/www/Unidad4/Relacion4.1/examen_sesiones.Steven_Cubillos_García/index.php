<?php
session_start();

if (!isset($_SESSION['jug1']) || !isset($_SESSION['jug2'])){
    $_SESSION['jug1'] = rand(1, 10);
    $_SESSION['jug2'] = rand(1, 10);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cartas!</h1><br>

    <h3>Pruebe nuestras cartas.</h3><br>
    
    <p> <b>Jugador 1:</b><br> <?php echo carta($_SESSION['jug1']); ?></p><br>
    <p> <b>Jugador 2:</b><br> <?php echo carta($_SESSION['jug2']); ?></p><br>

    <?php
    
    if ($_SESSION['jug1'] > $_SESSION['jug2']) {
        echo "<p>El jugador ganador es el A</p>";
    } elseif ($_SESSION['jug1'] < $_SESSION['jug2']) {
        echo "<p>El jugador ganador es el B</p>";
    } else {
        echo "<p>¡Ha habido un empate!</p>";
    }

    function carta($num) {
    
        $cartas = [
            1 => 'c1.svg',
            2 => 'c2.svg',
            3 => 'c3.svg',
            4 => 'c4.svg',
            5 => 'c5.svg',
            6 => 'c6.svg',
            7 => 'c7.svg',
            8 => 'c8.svg',
            9 => 'c9.svg',
            10 => 'c10.svg'
        ];
        
        return "<img src=\"{$cartas[$num]}\" alt=\"Carta $num\" height=\"135px\" width=\"100px\">"; // Aqui devuelve la imagen de la carta que haya tocado
    }

    ?>

    <form action="reiniciar.php" method="post">
        <input type="submit" value="Reiniciar el juego">
    </form>
</body>
</html>
