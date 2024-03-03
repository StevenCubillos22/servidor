<?php

require('Clases.php');
// Pruebas
$gato = new Gato("Whiskers");
echo $gato->mover(); 
echo $gato->emitirSonido(); 
echo $gato->ronronear(); 

$perro = new Perro("Johnny");
echo $perro->mover(); 
echo $perro->emitirSonido(); 
echo $perro->ladrar(); 

$canario = new Canario("Piolin");
echo $canario->mover(); 
echo $canario->emitirSonido(); 
echo $canario->cantar(); 


?>