<?php
$id = $_GET['id'];
function eliminarElemento($id)
{

    include('connect.php');

    // Verificar la conexión
    if ($connect->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta para eliminar el elemento con el ID proporcionado
    $sql = "DELETE FROM viajes WHERE id = $id";

    if ($connect->query($sql) === TRUE) {
        echo "Elemento eliminado correctamente.";
    } else {
        echo "Error al eliminar el elemento: " . $connect->error;
    }

    // Cerrar la conexión
    $conn->close();
}

// Uso de la función
$idAEliminar = $id; // Reemplaza con el ID del elemento que deseas eliminar
eliminarElemento($idAEliminar);

?>

<script type="text/javascript">
    function redirect() {
        window.location = "http://localhost:8080/ResumenesRepartos";
    }
    window.onload = redirect;
</script>