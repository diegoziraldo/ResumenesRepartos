<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    // Aquí puedes realizar las acciones necesarias para eliminar el registro con el ID proporcionado
    echo "Eliminar el registro con ID: $id";
}
?>
