<?php

class sesion {
    public function setAttribute($key, $value) {
       
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Establece el atributo en la sesión
        $_SESSION[$key] = $value;
    }

    public function getAttribute($key) {
        
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Devuelve el valor del atributo si está definido, sino, devuelve null
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function deleteAttribute($key) {
       
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
     
    public function destroySession() {
       
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

       
        session_destroy();
    }
}

?>


