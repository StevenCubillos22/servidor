<?php
 class Estudiante{

public $nombre;
public $edad;
public $curso;
public $notas = [];


public function __construct($nombre, $edad, $curso, $notas ){

$this->nombre = $nombre ?? ''; 
$this->edad = $edad ?? '';
$this->curso = $curso ?? '';
$this->notas = $notas ?? [];

}

public function agregarNota($nota) {
    $this->notas[] = $nota;
}

public function obtenerMedia() {
    $totalNotas = count($this->notas); //Cuenta la cantidad de numeros enteros que hay en el array
    if ($totalNotas > 0) {
        $sumaNotas = array_sum($this->notas); //Suma todos los numeros del array
        return $sumaNotas / $totalNotas; //Hacemos la media
    } else {
        return 0;
    }
}
}




?>