<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    
    // Obtenemos el número ingresado por el usuario
    $numero= $_GET['n1'];

    switch($numero) {

        case 1:
        echo "0";
        break;

        case 2:
        echo "1";
        default:

        echo "0 1";
        $fibo1=0;
        $fibo2=1;
        
        $aux;


        while ($numero > 2){

            $aux=$fibo1;
            $fibo1=$fibo2;
            $fibo2=$aux+$fibo2;
            echo " ".$fibo2." ";
            $numero--;
        }

    }




    //$res=0;
    //for($i=0; $i <= $n; $i++){
        //if($i =1){
            //$res+=1
        //} else {
          
        //}
    }



    ?>
</body>
</html>

