<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 16</title>
    </head>
    <body>
      <form method = "post">
        <label for = "numero">Pon un numero y te diremos si es primo o no: <input type = "number" name = "numero" required /></label>
        <input type = "submit" value = "submit" />
      </form>

      <?
        if (isset($_POST["numero"])) {
          $numero = $_POST["numero"];

          echo "<br />";

          $es_primo = true;
          for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
              $es_primo = false;
              break;
            }
          }
          if ($es_primo) {
            echo "$numero es un número primo";
          } else {
            echo "$numero no es un número primo";
          }
        }
      ?>
    </body>
  </html>