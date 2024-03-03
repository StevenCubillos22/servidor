<?php
class EstudianteGraduado extends Estudiante {
    public $nombre;
    public $edad;
    public $curso;
    public $notas;
    public $nivel;

    public function __construct($nombre, $edad, $curso, $notas, $nivel) {
        $this->nombre = $nombre ?? '';
        $this->edad = $edad ?? '';
        $this->curso = $curso ?? '';
        $this->notas = $notas ?? '';
        $this->nivel = $nivel ?? '';
    }
}
?>
