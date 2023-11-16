<?php
// Detalles de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "RepartosNico";

// Crear conexión
$connect = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($connect->connect_error) {
    die("Error de conexión: " . $connect->connect_error);
}



// Aquí puedes realizar operaciones en la base de datos

// Cerrar conexión al finalizar
/* $connect->close(); */
?>