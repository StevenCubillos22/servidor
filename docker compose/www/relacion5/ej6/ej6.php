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
function generaArrayInt($tam, $min, $max) {
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
    $count = count($array);

    // si el numero es mayor que el tamaño del array, se calcula el resto para que no "desborde" el array - ejemplo: si "n" = 7 y el tamaño del array 5, sería lo mismo que rotar el array 2 posiciones únicamente
    if ($num >= $count) {
      $num = $num % $count;
    }

    for ($i = $count - $num; $i < $count; $i++) {
      $arrayRotado[] = $array[$i];
    }

    for ($i = 0; $i < $count - $num; $i++) {
      $arrayRotado[] = $array[$i];
    }

    return $arrayRotado;
}

//ROTA IZQUIERDA ARRAY

   function rotaIzquierdaArray($array, $num){

    $arrayModificado=[];

    if ($num >= $count) {
      $num = $num % $count;
    }

    for ($i = count($array) - $num; $i < count($array); $i++) {
        $arrayRotado[] = $array[$i];
      }
  
      for ($i = 0; $i <  $num; $i++) {
        $arrayRotado[] = $array[$i];
      }
  
      return $arrayRotado;

   }

   // Genera un array con valores aleatorios

   $arrayCreado = array();
    for ($i = 0; $i < 40; $i++) {
    $arrayCreado[$i] = rand(0, 120);
  }


// Muestra el array original
echo "Array Original: " . implode(", ", $arrayCreado) . "<br>";

// Encuentra el mínimo del array
echo "Mínimo: " . encontrarMinimo($arrayCreado) . "<br>";

// Encuentra el máximo del array
echo "Máximo: " . encontrarMaximo($arrayCreado) . "<br>";

// Calcula la media del array
echo "Media: " . mediaArray($arrayCreado) . "<br>";

// Comprueba si un número está en el array
$numero = 42;
echo "¿El número $numero está en el array? " . (estaArrayInt($arrayCreado, $numero) ? 'Sí' : 'No') . "<br>";

// Encuentra la posición de un número en el array
echo "Posición del número $numero en el array: " . posicionEnArray($arrayCreado, $numero) . "<br>";

// Crea un array invertido
$arrayInvertido = arrayVolteado($arrayCreado);
echo "Array Invertido: " . implode(", ", $arrayInvertido) . "<br>";

// Rota el array hacia la derecha
$posicionesDerecha = 2;
$arrayRotadoDerecha = rotaDerechaArray($arrayCreado, $posicionesDerecha);
echo "Array Rotado a la Derecha ($posicionesDerecha posiciones): " . implode(", ", $arrayRotadoDerecha) . "<br>";

// Rota el array hacia la izquierda
$posicionesIzquierda = 3;
$arrayRotadoIzquierda = rotaIzquierdaArray($arrayCreado, $posicionesIzquierda);
echo "Array Rotado a la Izquierda ($posicionesIzquierda posiciones): " . implode(", ", $arrayRotadoIzquierda) . "<br>";
?>
    
</body>
</html>