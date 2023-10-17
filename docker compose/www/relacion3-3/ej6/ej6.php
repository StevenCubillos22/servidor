<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php




$palabra = $_POST["palabra"];

$diccionario = array(
    "hola" => "hello",
    "adiós" => "goodbye",
    "comportamiento" => "behaviour",
    "guantes" => "gloves",
    "perro" => "dog",
    "gato" => "cat",
    "casa" => "house",
    "cocina" => "kitchen",
    "gorra" => "cap",
    "naranja" => "orange",
    "rojo" => "red",
    "erizo" => "hedgehog",
    "crepúsculo" => "twilight",
    "caja" => "box",
    "blanco" => "white",
    "negro" => "black",
    "sol" => "sun",
    "luna" => "moon",
    "agua" => "water",
    "auriculares" => "headphones"
);


// Verificamos si se ha enviado una palabra a traducir
if(isset($palabra)){
    $palabra = strtolower($_POST['palabra']); // convertimos la palabra a minúsculas si se ha escrito a mayuscula
    // Verificamos si la palabra está en el diccionario, actua como un equals en java
    if(array_key_exists($palabra, $diccionario)){
        echo "<p>La traducción de <b>$palabra</b> es <b>{$diccionario[$palabra]}</b>.</p>";
        echo "<p>Gracias por usar el diccionario.</p>";
    } else {
        echo "<p>La palabra <b>$palabra</b> no se encuentra disponible en el diccionario. Disculpe las molestias :( </p>";
    }
}



















?>
    
</body>
</html>