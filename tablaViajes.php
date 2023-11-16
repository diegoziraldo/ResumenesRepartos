

<?php

    include('getViajes.php');
?>
    <table class='table'>
    <thead>
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Nombre Cliente</th>
            <th scope='col'>Cantidad de Viajes</th>
            <th scope='col'>Precio por viaje</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $contador = 1; // Variable para contar las filas
    while ($fila = mysqli_fetch_assoc($resultado)) {    
        echo "<tr>
                <th scope='row'>$contador</th>
                <td>{$fila['sector']}</td>
                <td>{$fila['cantidad']}</td>
                <td>{$fila['precio']}</td>
            </tr>";
        $contador++;
    }
    ?>

    </tbody>
</table>

