<?php

require_once 'poligono.php';

class Cuadrado extends Poligono {
    public function calcularArea() {
        return $this->lado1 * $this->lado1;
    }
}


?>