<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de funciones PHP</title>
</head>

<body>
    <h2>Introduce unos números:)) :</h2>
    <form action="ej2.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" id="num1" name="numero1" required><br>

        <label for="numero2">Número 2:</label>
        <input type="number" id="num2" name="numero2" required><br>


        <input type="submit" value="Calcular">
    </form>

    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    ///FUNCIONES------------
    
    //FUNCION EsCAPICUA
    function esCapicua($num){
        $numeroInvertido = strrev((string)$num);
    
    // Compara el número original con el número invertido
    if ((string)$num === $numeroInvertido) {
        return true; // Si son iguales, el número es capicúa
    } else {
        return false; // Si no son iguales, el número no es capicúa
     }
    }

    //FUNCION ESPRIMO
    function esPrimo($num){
        for ($i=2; $i<$num; $i++){
          if (($num % $i) == 0) {
            return false;
          } else{
            return true;
          }
        }
    }


    //FUNCION SIGUIENTE PRIMO

    function siguientePrimo($num){
    
        do {
        $num++;
        } while (!esPrimo($num));
      return $num;
    }

    //FUNCION POTENCIA 

    function potencia($base, $exponente){
    return pow($base, $exponente); //pow es una funcion que se desarrolla como potencia
    }

    //FUNCION DIGITOS

    function digitos($numerito){

        if ($numerito == 0){
            return 1;
        } else {

            $contador=0;
            while ($contador > 10){
                $numerito = $numerito/10,
                $contador++
            }

            return $contador;
        }
    }


    //6.FUNCIÓN VOLTEA
    function voltea($prueba){
        return (int)strrev((string)$prueba);
    }


    //7.FUNCIÓN DIGITO-N
    function digitoN ($numero, $digito){

        return substr($numero, $digito, $length = 1);
    }

    //8.POSICION DE DIGITO

    function posicionDeDigito ($num, $digito){
        $num_str = (string)$num;
        $posicion = -1;

        for ($i = 0; $i < strlen($num_str); $i++) {
            if ($num_str[$i] == $digito) {
                $posicion = $i;
                break;
                }
            }
        return $posicion;
    }

    //9.QUITAR POR DETRAS

    function quitarPorDetras($num, $n){
        $num_string = (string)$num;
        $num_string = substr($num_string, 0, -$n);
        return (int)$num_string;
    }

    //10.QUITAR POR DELANTE

    function quitarPorDelante($num, $n){
        $num_string = (string)$num;
        $num_string = substr($num_string, $n);
        return (int)$num_string;

    }

    //11.PEGAR POR DETRAS

    function pegarPorDetras($num, $x){
        return (int)($num . $x);
    }


    //12.PEGAR POR DELANTE

    function pegarPorDelante($num, $x){
        return (int)($x . $num);
    }


    //13.TROZO DE NUMERO Toma como parámetros las posiciones inicial y final dentro de
    //un número y devuelve el trozo correspondiente

    function trozoDeNumero($num, $principio, $final){
        $num_string = (string)$num;
        $trozo = substr($num_string, $principio, $final);
        return (int)($trozo);

    }

    //14. JUNTAR NUMEROS Pega dos números para formar uno.

    function juntarNum($num1, $num2){
        return (int)($num1 . $num2);
    }


    echo "Número 1: $num1<br>";
    echo "Número 2: $num2<br>";

    echo "Es capicúa: " . (esCapicua($num1) ? 'Sí, lo es' : 'No lo es') . "<br>";
    echo "Es primo: " . (esPrimo($num1) ? 'Sí, lo es' : 'No lo es') . "<br>";
    echo "Siguiente primo: " . siguientePrimo($num1) . "<br>";
    echo "Potencia: " . potencia($num1, $num2) . "<br>";
    echo "Número de dígitos: " . digitos($num1) . "<br>";
    echo "Número volteado: " . voltea($num1) . "<br>";
    echo "Dígito en la posición 2: " . digitoN($num1, 2) . "<br>";
    echo "Posición del dígito 5: " . posicionDeDigito($num1, 5) . "<br>";
    echo "Quitar 2 dígitos por detrás: " . quitarPorDetras($num1, 2) . "<br>";
    echo "Quitar 2 dígitos por delante: " . quitarPorDelante($num1, 2) . "<br>";
    echo "Pegar 23 por detrás: " . pegarPorDetras($num1, 23) . "<br>";
    echo "Pegar 23 por delante: " . pegarPorDelante($num1, 23) . "<br>";
    echo "Trozo del número (1-3): " . trozoDeNumero($num1, 1, 3) . "<br>";
    echo "Juntar números: " . juntarNum($num1, $num2) . "<br>";

?>

</body>

</html>