<?php

require_once ('./poligono.php');

class Triangulo extends Poligono {
    public function calcularArea() {
        return ($this->lado1 * $this->lado2) / 2;
    }
}

?>

//en vez de hacer fetch assoc, usar objetos 