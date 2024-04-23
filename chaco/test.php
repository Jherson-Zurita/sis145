<?php

require_once 'conexion.php'; // Incluimos el archivo de conexión

try {
    $conexion = new BaseDatos(); // Creamos una instancia de la clase BaseDatos
    
    // Consulta SQL para seleccionar todos los registros de la tabla "carreras"
    $sql = "SELECT * FROM carreras";
    
    // Ejecutamos la consulta
    $resultado = $conexion->consulta($sql);
    
    // Imprimimos los resultados
    echo "<h2>Registros de la tabla 'carreras':</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th></tr>";
    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$fila['id']}</td>";
        echo "<td>{$fila['nombre']}</td>";
        echo "<td>{$fila['descripcion']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    // Si hay algún error en la conexión o en la consulta, se captura la excepción
    echo "Error al ejecutar la consulta: " . $e->getMessage();
}

$conexion->cerrarConexion(); // Cerramos la conexión

?>

