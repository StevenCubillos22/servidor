<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 3</title>
    </head>
    <body>

<?php

//exportamos el script de php de donde viene la funcion

include("../ej1/ej1.php");

function binarioADecimal($binario) {
    return bindec($binario); //bindec covierte de binario a decimal
}


?>

</body>
</html>