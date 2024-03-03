<?php

require_once ('./Triangulo.php');
require_once ('./Cuadrado.php');
require_once ('./Rectangulo.php');

// Ejemplos de uso
$triangulo = new Triangulo('triangulo', 5, 8);
echo "Área de un triángulo: " . $triangulo->calcularArea() . "\n";

$cuadrado = new Cuadrado('cuadrado', 4);
echo "Área de un cuadrado: " . $cuadrado->calcularArea() . "\n";

$rectangulo = new Rectangulo('rectangulo', 6, 10);
echo "Área de un rectángulo: " . $rectangulo->calcularArea() . "\n";

?>