<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 25</title>
    </head>
    <body>
      <form method = "post">
        <label for = "numero">número: <input type = "number" name = "numero" required /></label>
        <input type = "submit" value = "submit" />
      </form>

      <?
        if (isset($_POST["numero"])) {
          $num = $_POST["numero"];

          $numeroBackup = $num;

          $numero_invertido = 0;

          while ($num > 0) {
            $digito = $num % 10;
            $numero_invertido = $numero_invertido * 10 + $digito;
            $num = (int)($num / 10);
          }

          echo "<p>el número $numeroBackup invertido es: $numero_invertido</p>";
        }
      ?>
    </body>
  </html>