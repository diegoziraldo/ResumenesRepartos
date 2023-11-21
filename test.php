<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Modificable</title>
</head>
<body>

    <form action="guardar_modificaciones.php" method="post">
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Zona</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Supongamos que $datos es un array con los datos obtenidos de la base de datos
                $datos = [
                    ['id' => 1, 'cliente' => 'Cliente1', 'zona' => 'Zona1', 'cantidad' => 5, 'precio' => 10.50],
                    ['id' => 2, 'cliente' => 'Cliente2', 'zona' => 'Zona2', 'cantidad' => 8, 'precio' => 8.75],
                    // ... más filas ...
                ];

                foreach ($datos as $fila) {
                    echo "<tr>
                            <td>{$fila['id']}</td>
                            <td><input type='text' name='cliente[]' value='{$fila['cliente']}'></td>
                            <td><input type='text' name='zona[]' value='{$fila['zona']}'></td>
                            <td><input type='number' name='cantidad[]' value='{$fila['cantidad']}'></td>
                            <td><input type='number' step='0.01' name='precio[]' value='{$fila['precio']}'></td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>

        <input type="submit" value="Guardar Cambios">
    </form>

</body>
</html>
