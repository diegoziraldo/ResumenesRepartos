



<?php
function crearTabla($nombreTabla, $columnas)
{
    include('connect.php');

    // Crear la consulta SQL
    $query = 'CREATE TABLE ' . $nombreTabla . ' (' . implode(', ', $columnas) . ');';

    // Ejecutar la consulta SQL
    $result = $connect->query($query);

    // Comprobar el resultado de la consulta
    if ($result === TRUE) {
        // La tabla se creó correctamente
        return TRUE;
    } else {
        // Se produjo un error al crear la tabla
        return FALSE;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreTabla = $_POST['nombreTabla'];
    $columnas = [
        'id INT NOT NULL AUTO_INCREMENT',
        'nombre VARCHAR(255)',
        'apellido VARCHAR(255)',
        'PRIMARY KEY (id)'
    ];

    crearTabla($nombreTabla, $columnas);
}
?>