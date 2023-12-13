
<?php

include('connect.php');

// Preparar la consulta SQL
$consulta = "SELECT * FROM repartidores";


// Ejecutar la consulta
$resultado = mysqli_query($connect, $consulta);
?>