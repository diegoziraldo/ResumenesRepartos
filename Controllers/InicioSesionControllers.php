<?php

class InicioSesionControllers
{
    
    public function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $cargo = $_POST["cargo"];
            $contrasena = $_POST["contrasena"];

            
            include('./Models/connect.php');

            // Consulta SQL para verificar la existencia de los datos
            $sql = "SELECT * FROM registro WHERE nombre='$nombre' AND apellido='$apellido' AND cargo='$cargo' AND contrasena='$contrasena'";
            $result = $connect->query($sql);

            if ($result->num_rows > 0) {
                include_once('views/home.php');

            } else {
                // Los datos no existen en la base de datos
                echo "Inicio de sesión fallido";

            }
        }
    }
}

?>

