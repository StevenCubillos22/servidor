<?php
if (!isset($_COOKIE['usuario'])){
    setcookie("usuario", "Alicia", time() + 1200);
}

echo $_COOKIE['usuario'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Bingo!</h2>
<?
if (!isset($_COOKIE['usuario'])){
    echo "cookie ya esta definidaa : ";
} else {
    echo "Ya no esta";
}
    ?>
</body>
</html>