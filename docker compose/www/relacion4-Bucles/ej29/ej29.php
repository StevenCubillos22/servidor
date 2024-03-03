<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 29</title>
    </head>
    <body>
      <form method = "post">
        <label for = "num1">num1: <input type = "number" name = "num1" required /></label>
        <label for = "num2">num2: <input type = "number" name = "num2" required /></label>
        <input type = "submit" value = "submit" />
      </form>

      <br />

      <?php
        if (isset($_POST["num1"]) && isset($_POST["num2"])) {
          $num1 = $_POST["num1"];
          $num2 = $_POST["num2"];

          $pos = $num1;

          while ($pos > 0) {
            if ($pos % $num2 != 0) {
              echo $pos . "<br />";
            }

            $pos--;
          }
        }
      ?>
    </body>
  </html>