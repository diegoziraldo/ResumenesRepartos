
<?php

include('connect.php');

// Preparar la consulta SQL
$consulta = "SELECT * FROM clientes";

// Ejecutar la consulta
$resultado = mysqli_query($connect, $consulta);
?>