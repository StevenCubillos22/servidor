<?php

class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function emitirSonido() {
        return "Haciendo ruido genérico";
    }
    
    public function mover() {
        return "Movimiento genérico";
    }
}

class Mamifero extends Animal {
    public function amamantar() {
        return "Amamantando a las crías";
    }
}

class Ave extends Animal {
    public function volar() {
        return "Volando en el cielo";
    }
}

class Gato extends Mamifero {
    public function ronronear() {
        return "Ronroneando";
    }

    public function mover() {
        return "Caminando sigilosamente";
    }
}

class Perro extends Mamifero {
    public function ladrar() {
        return "Ladrando";
    }

    public function mover() {
        return "Corriendo felizmente";
    }
}

class Canario extends Ave {
    public function cantar() {
        return "Cantando melodías";
    }
}

class Pinguino extends Ave {
    public function nadar() {
        return "Nadando en el agua";
    }
}

class Lagarto extends Animal {
    public function reptar() {
        return "Reptando por el suelo";
    }
}


?>