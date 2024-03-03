
<html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 15</title>
    </head>
    <body>
      <form method = "post">
        <label for = "base">Base: <input type = "number" name = "base" required /></label>
        <label for = "exponente">Exponente: <input type = "number" name = "exponente" required /></label>
        <input type = "submit" value = "submit" />
      </form>

      <?
        if (isset($_POST["base"]) && isset($_POST["exponente"])) {
          $base = $_POST["base"];
          $exponente = $_POST["exponente"];

          echo "<br />";

          for ($i = 1; $i <= $exponente; $i++) {
            $resultado = 1;
            for ($j = 1; $j <= $i; $j++) {
              $resultado *= $base;
            }
            echo $base . "^ " .$i. "= " .$resultado. "<br />";
          }
        }
      ?>
    </body>
  </html>