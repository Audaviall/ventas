<?php 

class Conectar {
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $bd = "ventas";

    public function conexion() {
        $conexion = new mysqli($this->servidor, 
        						$this->usuario, 
        						$this->password, 
        						$this->bd);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}

?>
