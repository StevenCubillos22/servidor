<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php



//GENERA ARRAY
function generaArrayInt($n, $min, $max) {
    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}



//MINIMO ARRAY INT
//Devuelve el mínimo del array que se pasa como parámetro.

function encontrarMinimo($array) {
    if (count($array) == 0) {
        return null; // Devolvera null si el array está vacío
    }
    
    $minimo = $array[0]; // Suponemos que el primer elemento es el mínimo
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $minimo) {
          $minimo = $array[$i];
        }
      }
      return $minimo;
    }

//MAXIMO ARRAY INT

function encontrarMaximo($array) {
    if (count($array) == 0) {
        return null; // Devolvera null si el array está vacío
    }
    
    $maximo = $array[0]; // Suponemos que el primer elemento es el mínimo
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $maximo) {
          $maximo = $array[$i];
        }
      }
      return $maximo;
    }

//MEDIA ARRAY INT

function mediaArray($array){
    if (count($array) == 0) {
        return null; 
    }

    $media=0;

    for($i=0; $i < count($array); $i++){
        $media+=$array[$i];
    }
    return $media / count($array);
  }

  //ESTA ARRAY INT
  //Dice si un número está o no dentro de un array.

  function estaArrayInt($array, $numero){
    for($i=0; $i < count($array); $i++){

        if ($array[$i] == $numero){
            return true;
        }
    }
    return false;
  }

  //POSICION EN ARRAY
  //Busca un numero en un array y devuelve la posicion donde se encuentra

  function posicionEnArray($array, $num) {
    for ($i = 0; $i < count($array); $i++) {
      if ($array[$i] == $num) {
        return $i;
      }
    }
    return null;
  }


  //ARRAY INVERTIDO

  function arrayVolteado($array){
    $arrayDelReves = [];
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $arrayDelReves[]=$array[$i];
    }
    return $arrayDelReves;
 }

 //ROTA DERECHA ARRAY

   function rotaDerechaArray($array, $num){

    $arrayModificado=[];

    for ($i = count($array) - $num; $i < count($array); $i++) {
        $arrayRotado[] = $array[$i];
      }
  
      for ($i = 0; $i < count($array) - $num; $i++) {
        $arrayRotado[] = $array[$i];
      }
  
      return $arrayRotado;

   }

//ROTA IZQUIERDA ARRAY

   function rotaIzquierdaArray($array, $num){

    $arrayModificado=[];

    for ($i = count($array) - $num; $i < count($array); $i++) {
        $arrayRotado[] = $array[$i];
      }
  
      for ($i = 0; $i <  $num; $i++) {
        $arrayRotado[] = $array[$i];
      }
  
      return $arrayRotado;

   }












?>
    
</body>
</html>