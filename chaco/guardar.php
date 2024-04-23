<?php

include("conexion.php");

$bd = new BaseDatos();

$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"]; 
$url = $_POST["url"];
$estado = $_POST["estado"];

$sql = "INSERT INTO carreras (nombre, descripcion, imagen, url, estado) VALUES ('$titulo', '$descripcion', '$imagen', '$url', '$estado')";
$rows = $bd->consulta($sql);

echo "datos insertados";

?>
