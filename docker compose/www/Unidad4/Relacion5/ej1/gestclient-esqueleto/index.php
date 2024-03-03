<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "utf-8" />
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
    <title>GestClient</title>
    <link rel = "stylesheet" href = "style.css" />
  </head>
  <body>
    <div id = "content-wrapper">
      <h1 id = "title">gestclient</h1>
      <h2 id = "subtitle">gestión de clientes de certibank</h2>

      <?
        $host = "db";
        $dbUsername = "root";
        $dbPassword = "test";
        $dbName = "banco";
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        try {
          if (isset($_GET["action"]) && $_GET["action"] == "create") {
            $dni = $_GET["dni"];
            $nombre = $_GET["nombre"];
            $direccion = $_GET["direccion"];
            $telefono = $_GET["telefono"];

            $sql = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES (:dni, :nombre, :direccion, :telefono)";

            $stmt = $conn -> prepare($sql);

            $stmt -> bindParam(":dni", $dni);
            $stmt -> bindParam(":nombre", $nombre);
            $stmt -> bindParam(":direccion", $direccion);
            $stmt -> bindParam(":telefono", $telefono);

            try {
              $stmt -> execute();
            } catch (PDOException $e) {
              displayError("error al añadir cliente: " . $e -> getMessage());
            }
          }

          /* --------------------------------------------------------------------------- */

          if (isset($_GET["action"]) && $_GET["action"] == "remove") {
            $dni = $_GET["dni"];

            $sql = "DELETE FROM cliente WHERE dni = :dni";

            $stmt = $conn -> prepare($sql);

            $stmt -> bindParam(":dni", $dni);

            try {
              $stmt -> execute();
            } catch (PDOException $e) {
              displayError("Error en la eliminación del cliente: " . $e -> getMessage());
            }
          }

          /* --------------------------------------------------------------------------- */

          if (isset($_GET["action"]) && $_GET["action"] == "modify") {
            $nuevo_dni = $_GET["dni"];
            $nombre = $_GET["nombre"];
            $direccion = $_GET["direccion"];
            $telefono = $_GET["telefono"];
            $dni_previo = $_GET["dni_previo"];

            $sql = "UPDATE client SET dni = :nuevo_dni, nombre = :nombre, direccion = :direccion, telefono = :telefono WHERE dni = :dni_previo";

            $stmt = $conn -> prepare($sql);

            $stmt -> bindParam(":nuevo_dni", $nuevo_dni);
            $stmt -> bindParam(":nombre", $nombre);
            $stmt -> bindParam(":direccion", $direccion);
            $stmt -> bindParam(":telefono", $telefono);
            $stmt -> bindParam(":dni_previo", $dni_previo);

            try {
              $stmt -> execute();
            } catch (PDOException $e) {
              displayError("error al modificar cliente: " . $e -> getMessage());
            }
          }        
        } catch(PDOException $e) {
          displayError("Ha habido un error de conexión: " . $e -> getMessage());
        }
      ?>

      <table>
        <tr>
          <th class = "column-title">DNI</th>
          <th class = "column-title">NOMBRE</th>
          <th class = "column-title">DIRECCION</th>
          <th class = "column-title">TELÉFONO</th>
          <th></th>
        </tr>

        <form action = "index.php" method = "get">
          <tr>
            <td><input type = "text" name = "dni" required autofocus autocomplete = "off" onfocus = "this.select()"></td>
            <td><input type = "text" name = "nombre" required autocomplete = "off" onfocus = "this.select()"></td>
            <td><input type = "text" name = "direccion" required autocomplete = "off" onfocus = "this.select()"></td>
            <td><input type = "text" name = "telefono" required autocomplete = "off" onfocus = "this.select()"></td>
            <input type = "hidden" name = "action" value = "create">
            <td><input type = "submit" value = "añadir"></td>
          </tr>
        </form>

        <?
          try {
            $sql = "SELECT dni, nombre, direccion, telefono FROM cliente";

            $stmt = $conn -> prepare($sql);

            $stmt -> execute();

            $cliente = $stmt -> fetchAll(PDO::FETCH_ASSOC);

            foreach ($cliente as $client) {
              echo "
                <tr>
                  <td class = \"client-td\">" . $client["dni"] . "</td>
                  <td class = \"client-td\">" . $client["nombre"] . "</td>
                  <td class = \"client-td\">" . $client["direccion"] . "</td>
                  <td id = \"last-client-td\" class = \"client-td\">" . $client["telefono"] . "</td>
                  <td>
                    <a href = \"modificar.php?&dni=" . $client["dni"] . "&nombre=" . $client["nombre"] . "&direccion=" . $client["direccion"] . "&telefono=" . $client["telefono"] . "\">
                      <button>modificar</button>
                    </a>
                  </td>
                  <td>
                    <a href = \"index.php?action=remove&dni=" . $client["dni"] . "\">
                      <button id = \"remove-button\">
                        <img width = \"20px\" src = \"papelera.png\" />
                      </button>
                    </a>
                  </td>
                </tr>
              ";
            }
          } catch(PDOException $e) {
            displayError("Error a la obtencion de clientes: " . $e -> getMessage());
          }
        ?>
      </table>
    </div>
  </body>
</html>

<?
  function displayError($message) {
    echo "<script>alert(\"$message\");</script>";
    echo "<a href = \"index.php\"><button>volver</button></a>";
  }
?>
