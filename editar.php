<?php
if (isset($_GET['name']) && $_GET['name'] == 'editar') {
    // Ejecutar la función de edición o cualquier otra acción necesaria
    echo "Se hizo clic en el botón de editar. Ejecutar lógica de edición aquí.";
} else {
    // No se proporcionó el parámetro adecuado
    echo "Error: No se proporcionó un parámetro válido.";
}
?>
