<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar Máximo y Mínimo</title>
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

    function siguientePrimo($num1){

        do {

        } while (!esPrimo($num1++))

      return true;
    }

    //FUNCION POTENCIA 

    function potentia($base, $exponente){
        $num=1;
        for ($i=0; i<$exponente; i++){
            $num = $num * $base;
        }
        return $num;
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

        $volteado = 0;

        while ($prueba){

            $volteado= ($volteado * 10) + ($prueba % 10);
            $prueba = $prueba/10;

        }
        return $volteado;
    }

    //7.FUNCIÓN DIGITO-N
    function digitoN ($numero, $digito){

        return substr($numero, $digito, $length = 1);


    }

    //8.POSICION DE DIGITO

    function posicionDeDigito ($x, $i){
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

    function quitarPorDetras($num, $x){
        $num_string = (string)$num;
        $num_string = substr($num_string, 0, -$n);
        return (int)$num_string;
    }

    //10.QUITAR POR DELANTE

    function quitarPorDelante($num, $x){
        $num_string = (string)$num;
        $num_string = substr($num_string, $n);
        return (int)$num_string;

    }

    //11PEGAR POR DETRAS

    function pegarPorDetras($num, $x){
        return (int)($num . $x);
    }


    //12.PEGAR POR DELANTE

    function pegarPorDelante($num, $x){
        return (int)($x . $num);
    }


    //13.TROZO DE NUMERO

    function trozoDeNumero($num, $principio, $final){
        $num_string = (string)$num;
        $trozo = substr($num_string, $principio, $final);
        return (int)($trozo);

    }

    //14. JUNTAR NUMEROS

    function juntarNum($num1, $num2){
        return (int)($num1 . $num2);
    }




?>

</body>

</html>