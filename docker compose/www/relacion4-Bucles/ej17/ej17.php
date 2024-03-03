<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 17</title>
    </head>
    <body>
      <form method = "post">
        <label for = "numero">Numero: <input type = "number" name = "numero" required /></label> <!-- forma más directa: 'min = "1"' -->
        <input type = "submit" value = "submit" />
      </form>

      <?
        if (isset($_POST["numero"])) {
          $num = $_POST["numero"];

          if ($num > 0) {
            $suma = 0;
            for ($i = $num + 1; $i <= $num + 100; $i++) {
              $suma += $i;
            }
            echo "la suma de los 100 primeros numeros siguientes a $numero es: $suma";
          } else {
            echo "el número puesto no es correcto";
          }
        }
      ?>
    </body>
  </html>