<!DOCTYPE html>
<html>
<body>
<?php
class Persona {
    // Propiedades
    public $nombre;
    public $apellidos;
    public $edad;

    // Constructor
    function __construct($nombre, $apellidos, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }
  
    // Metodos
    function set_nombre($nombre) {
      $this->nombre = $nombre;
    }

    function get_nombre() {
      return $this->nombre;
    }

    function set_apellidos($apellidos) {
      $this->apellidos = $apellidos;
    }
    function get_apellidos() {
      return $this->apellidos;
    }


    function set_edad($edad) {
        $this->edad = $edad;
      }
      function get_edad() {
        return $this->edad;
      }

    
      // Nueva función saludar
    function saludar() {
        echo "Hola, soy " . $this->nombre . " " . $this->apellidos . ".";
    }

    // Redefinición de la función __toString
    function __toString() {
        return "Nombre: " . $this->nombre . "<br> Apellidos: " . $this->apellidos . "<br> Edad: " . $this->edad;
    }

  }
  
  $p1 = new Persona('Steven', 'Cubillos', '20');
  
  echo $p1;  

?>
</body>
</html>