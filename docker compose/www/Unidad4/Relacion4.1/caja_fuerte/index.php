<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Juego del número secreto</title>
  </head>
  <body>



  <?php
        // Primero, comprobamos su ya existe la variable "numero" en la URL.
        // Si no existe, significa que el usuario tiene que escribir un número: tenemos que mostrarle el formulario.
        // Si ya existe, significa que el usuario ha escrito algún número y tenemos que comprobar si coincide con el aleatorio.
        
		if (!isset($_REQUEST['numero'])) {
            // La variable "numero" NO existe. Vamos a pedirle que lo escriba en un formulario
            // ¿Y el número aleatorio? Si aún no existe, significa que es LA PRIMERA ejecución y aún tenemos que elegirlo.
            
			// En cambio, si ya existe, tendremos que recuperarlo para seguir usando el mismo aleatorio y no uno nuevo cada vez.
            if (!isset($_SESSION['codigo'])) {
                
				$_SESSION['intentos'] = 4;
				$_SESSION['codigo'] = 3245;
                
			} 
			echo "<form action='index.php' method='get'>
				Adivina mi número:
				<input type='text' name='numero'><br>
				
				<br>				
				<input type='submit'>
				</form>";
		} else {
            // La variable "numero" existe. Eso indica que el usuario escribió un número en el formulario.
            // Vamos a recuperar ese número y a compararlo con el aleatorio.
			$n = $_REQUEST['numero'];
			$codigo = $_SESSION['codigo'];
            echo $_SESSION['intentos'];
			$_SESSION['intentos']--;

       // while ($_SESSION['intentos']<=0){
            echo "Tu número es: $n<br>";
			if ($n > $_SESSION['codigo']) {
				echo "Mi número es MENOR";
			}
			else if ($n < $_SESSION['codigo']) {
				echo "Mi número es MAYOR";
			}

        //}
			
		if ($n == $codigo){
            echo "<p>ENHORABUENA, HAS GANADO UN IPHONE 13 VAMOOSSS </p>";
			
		session_destroy();
        }
			else {
				echo "<p>Se acabaron las oportunidades </p>";
				
			}
			
            // Volvemos a llamar a este mismo programa, pasándole como variables de URL el aleatorio
            // y el número de intentos, para seguir jugando con el mismo número secreto.
			echo "<br><a href='index.php'>Sigue jugando...</a>";
            
		}
		
	?>



