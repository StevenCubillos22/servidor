<?php

require_once ('./poligono.php');
class Rectangulo extends Poligono {
    public function calcularArea() {
        return $this->lado1 * $this->lado2;
    }
}



?>