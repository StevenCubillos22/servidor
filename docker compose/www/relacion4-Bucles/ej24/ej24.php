<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 24</title>
      <style>
        body {
          font-family: monospace;
        }
      </style>
    </head>
    <body>
      <form method = "post">
        <label for = "numero">número: <input type = "number" name = "numero" required /></label>
        <input type = "submit" value = "submit" />
      </form>

      <br />

      <?
        //  solo funciona bien si se introduce un número de 7 cifras
        const ALTURA = 13;

        if (isset($_POST["numero"])) {
          $numero = $_POST["numero"];

          for ($i = 0; $i < ALTURA; $i++) {
            for ($j = 0; $j < ALTURA - $i; $j++) {
              echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }

            for ($j = 0; $j < $i; $j++) {
              echo $numero . " ";
            }

            echo "<br />";
          }
        }
      ?>
    </body>
  </html>