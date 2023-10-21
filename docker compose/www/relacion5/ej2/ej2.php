

<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 2</title>
    </head>
    <body>

<?php

//exportamos el script de php de donde viene la funcion

include("../ej1/ej1.php");

for ($i = 1; $i <= 1000; $i++) {
  if (esPrimo($i)) {
    echo $i . " - ";
  }
}


?>

</body>
</html>