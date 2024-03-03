<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el número</title>

</head>
<body>
    <form action="<? echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="login">

    
    <input type="number" name="number" placeholder="Numero">
    <input type="submit" value="Aceptar">
    </form>

    <p>¿No sabes cual es? Pues ánimo</p>
    
</body>
</html>