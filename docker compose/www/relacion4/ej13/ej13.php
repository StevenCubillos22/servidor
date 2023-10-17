<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    
        // Obtenemos el número ingresado por el usuario
        $n1= $_GET['n1'];
        $positivos=0;
        $negativos=0;
        $positArray[];
        $negatArray[];
       
        for ( $i=0; $i<=10; $i++){
            $n1= $_GET['n1'.$i];


            if($n1>0){
                $positivos++;
                array_push($positArray, $n1)
            } else {
                $negativos++;
                array_push($negatArray, $n1)
            }

        }

        echo "Numero de positivos: ".$positivos." ";
        echo "Numero de negaivos: ".$negativos." ";

        echo "<b>Numeros positivos:</b>".$positArray." ";
        echo "<b>Numeros negativos:</b>".$negatArray." ";


        
    ?>
</body>
</html>