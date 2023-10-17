<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<? 
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$suma= $n1 + $n2;
$resta= $n1 - $n2;
$multiplicacion= $n1 * $n2;
$division= $n1 / $n2;


echo " SUMA = " .$suma. " ";                                  
echo " RESTA = " .$resta. " ";
echo " MULTIPLICACION = " .$multiplicacion. " ";
echo " DIVISION = " .$division. " ";

?> 
    
</body>
</html>