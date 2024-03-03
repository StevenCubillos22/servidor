<?php

require('sesion.php');
$sessionHandler = new Session();


$sessionHandler->setAttribute('username', 'Steven');
echo $sessionHandler->getAttribute('username');  // Imprime Steven

$sessionHandler->deleteAttribute('username');
echo $sessionHandler->getAttribute('username');  // Imprime: null

$sessionHandler->destroySession();
// cualquier intento de obtener atributos de sesión devolverá null porque la sesión ha sido destruida.


?>