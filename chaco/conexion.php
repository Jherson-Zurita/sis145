<?php

class BaseDatos {
    private $conexion;

    
    public function __construct() {
        $this->conexion = new PDO("mysql:host=localhost;dbname=facultadchaco", "root", "12345");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    public function consulta($sql) {
        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();
        return $consulta;
    }
    public function cerrarConexion() {
        $this->conexion = null; 
    }
}


?>