

<?php


include('getViajes.php');


?>
    <table class='table border' >
    <thead>
        <tr class="text-center">
            <th scope='col'>#</th>
            <th scope='col'>Fecha</th>
            <th scope='col'>Cliente</th>
            <th scope='col'>Zona</th>
            <th scope='col'>Cant. Viajes</th>
            <th scope='col'>Precio por viaje</th>
            <th scope='col'>Total</th>
            <th scope='col'>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $contador = 1; // Variable para contar las filas
    while ($fila = mysqli_fetch_assoc($resultado)) {    
        $totalViajes = ($fila['precio'] * $fila['cantidad']);
        $fechaOriginal = $fila['fecha'];
        $fecha = date("d/m/Y", strtotime($fechaOriginal));

        echo "<tr class='text-center'>
                <th scope='row'>$contador</th>
                <td>$fecha</td>
                <td>{$fila['cliente']}</td>
                <td>{$fila['zona']}</td>
                <td>{$fila['cantidad']}</td>
                <td>{$fila['precio']}</td>
                <td style='font-weight:bold;'>$totalViajes</td>
                <td>$acciones</td>
            </tr>";
        $contador++;
    }
    ?>

    </tbody>
</table>

