<?php
    class conectar{
        private $servidor ="localhost";
        private $usuario ="root";
        private $bd ="dispocitivos";
        private $password ="";

    public function conexion(){
        $conexion=mysqli_connect($this->servidor,
                                $this->usuario,
                                $this->password,
                                $this->bd);
    return $conexion;
                            }    
    }

?>