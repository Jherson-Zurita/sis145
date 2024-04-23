<?php

include("conexion.php");

$bd = new BaseDatos();

$nombre = $_POST["materia"];
$sigla = $_POST["sigla"];


$sql = "INSERT INTO materias (nombre, sigla) VALUES ('$nombre', '$sigla')";
$rows = $bd->consulta($sql);

echo "datos insertados";

?>
