
<?php



class Libro {
    
    private $idLibro;
    private $titulo;
    public $autores = array();
    private $genero;
    private $pais;
    private $año;
    private $numPaginas;

    // Constructor
    public function __construct(){ 

    }

    public function set_idLibro($idLibro) {
        $this->idLibro = $idLibro;
      }
      public function get_idLibro() {
        return $this->idLibro;
      }
   #------------------

   public function set_titulo($titulo) {
      $this->titulo = $titulo;
    }
    public function get_titulo() {
      return $this->titulo;
    }
 #------------------
 public function set_genero($genero) {
        $this->genero = $genero;
    }
    public function get_genero() {
        return $this->genero;
    }


    public function get_autores(){
        $nomApellAutores="";
        foreach ($this->autores as $autor){
            $nomApellAutores .= $autor->get_nombre() ." ". $autor->get_apellido();
            
        }
        return $nomApellAutores;
    }

    public function set_autores($autor) {
        $this->autores[] = $autor;
    }


    #------------------
    public function set_pais($pais) {
        $this->pais = $pais;
    }
    public function get_pais() {
        return $this->pais;
    }

    #------------------
    public function set_año($año) {
        $this->año = $año;
    }
    public function get_año() {
        return $this->año;
    }

    #------------------
    public function set_numPaginas($numPaginas) {
        $this->numPaginas = $numPaginas;
    }
    public function get_numPaginas() {
        return $this->numPaginas;
    }

}


?>