<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 22</title>
    </head>
    <body>
      <?
        for ($i = 2; $i <= 100; $i++) {
          $esPrimo = true;

          for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
              $esPrimo = false;
              break;
            }
          }

          if ($esPrimo) {
            echo "$i<br />";
          }
        }
      ?>
    </body>
  </html>