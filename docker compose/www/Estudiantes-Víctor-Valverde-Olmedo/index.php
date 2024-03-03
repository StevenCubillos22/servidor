<?php
require_once 'Estudiante.php';
require_once 'EstudianteGraduado.php';

//Instanciamos dos clases: estudiante 1 y estudiante 2
$estudiante1 = new Estudiante('Víctor', '19', '2ºDAW', [5, 6, 10, 4]);
$estudiante2 = new Estudiante('Lorena', '21', '2ºASIR', [6, 10, 4, 8]);



//Agregamos las notas
$estudiante1->agregarNota(9.5);
$estudiante2->agregarNota(8.9);

//Imprimimos la información del estudiante 1
echo "Estudiante 1:\n";
echo "Nombre: {$estudiante1->nombre}\n";
echo "Edad: {$estudiante1->edad}\n";
echo "Curso: {$estudiante1->curso}\n";
echo "Notas: " . implode(", ", $estudiante1->notas) . "\n";
echo "Media: {$estudiante1->obtenerMedia()}\n\n";
?> <br><br><?php

//Imprimimos la información del estudiante 2
echo "Estudiante 2:\n";
echo "Nombre: {$estudiante2->nombre}\n";
echo "Edad: {$estudiante2->edad}\n";
echo "Curso: {$estudiante2->curso}\n";
echo "Notas: " . implode(", ", $estudiante2->notas) . "\n";
echo "Media: {$estudiante2->obtenerMedia()}\n\n";
?> <br><br><?php

//Instanciamos dos nuevas clases para los graduados: estudiante 1 y estudiante 2
$estudianteGraduado1 = new EstudianteGraduado("Ana", 25, "Posgrado", [9, 9.2, 8.8], "Doctorado");
$estudianteGraduado2 = new EstudianteGraduado("Pedro", 23, "Maestría", [8, 9, 9], "Posgrado");

//Agregamos las notas
$estudianteGraduado1->agregarNota(9.3);
$estudianteGraduado2->agregarNota(8.7);


//Imprimimos información del estudiante graduado 1
echo "Estudiante Graduado 1:\n\n";
echo "Nombre: {$estudianteGraduado1->nombre}\n";
echo "Edad: {$estudianteGraduado1->edad}\n";
echo "Curso: {$estudianteGraduado1->curso}\n";
echo "Nivel: {$estudianteGraduado1->nivel}\n";
echo "Notas: " . implode(", ", $estudianteGraduado1->notas) . "\n";
echo "Media: {$estudianteGraduado1->obtenerMedia()}\n\n";
?> <br><br><?php

//Imprimimos información del estudiante graduado 2
echo "Estudiante Graduado 2:\n";
echo "Nombre: {$estudianteGraduado2->nombre}\n";
echo "Edad: {$estudianteGraduado2->edad}\n";
echo "Curso: {$estudianteGraduado2->curso}\n";
echo "Nivel: {$estudianteGraduado2->nivel}\n";
echo "Notas: " . implode(", ", $estudianteGraduado2->notas) . "\n";
echo "Media: {$estudianteGraduado2->obtenerMedia()}\n";
?>
