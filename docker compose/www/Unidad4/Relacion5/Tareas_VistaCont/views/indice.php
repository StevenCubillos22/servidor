<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincón de Tareas</title>
    <style>
        body{
    background-color: aquamarine ;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
}

div.contenido{
    width: 50%;
    margin: auto;
    padding: 10px;
    text-align: center;
    border-radius: 15px;
    background-color: rgb(246, 208, 190);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

p{
   font-size: large;
}

input{
    border-radius: 8px;
}

img{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.boton-enlace {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
            border-radius: 8px;
            background-color: #4CAF50; /* Color de fondo del botón, puedes cambiarlo según tu diseño */
            color: white; /* Color del texto del botón */
        }
    </style>
</head>
<body>
    <div class="contenido">
        <h1>GestiTareas</h1><hr>
        <h3>Crea, borra y comparte tus tareas en un click!</h3>
  
        <p>Si no has iniciado sesión, haz click <a href="index.php?action=login" class="boton-enlace">Iniciar sesión</a>.</p>
        <p>O si no lo estás: <a href="index.php?action=registro" class="boton-enlace">Registrarse</a>.</p>
    </div>

</body>
</html>