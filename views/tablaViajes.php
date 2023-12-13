<?php


    include('./Models/getViajes.php');
    $fechaAnterior = null;

?>
<a href="./seccion/reportes.php?parametro1=<?php echo $fechaInicio; ?>&parametro2=<?php echo $fechaFin; ?>">Reporte</a>


<table class='table border'>
    <thead>
        <tr class="text-center">
            <th scope='col'>#</th>
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
                $totalAcumulado = 0; // Inicializar el total acumulado
                $primerRegistro = true; // Variable para indicar si es el primer registro

                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $fechaActual = $fila['fecha'];
                    if ($fechaActual != $fechaAnterior) {
                        if (!$primerRegistro) {
                            echo 
                            "<tr>
                                <td colspan='5'class='text-end' style='font-weight:bold;font-size: 26px;'><strong>Total:</strong></td>
                                <td class='text-center' style='font-weight:bold;font-size: 26px;'>" . $totalAcumulado . "</td>
                            </tr>";
                        }

                        // Mostrar una nueva fila con la nueva fecha
                        echo "<tr><td colspan='2' style='font-size: 20px;' ><strong>" . date('d/m/Y', strtotime($fechaActual)) . "</strong></td></tr>";

                        // Reiniciar el total acumulado para la nueva fecha
                        $totalAcumulado = 0;

                        // Indicar que ya no es el primer registro
                        $primerRegistro = false;
                    }

                    $totalViajes = $fila['precio'] * $fila['cantidad'];
                    $totalAcumulado += $totalViajes; // Sumar al total acumulado
                    $fechaOriginal = $fila['fecha'];
                    $fecha = date("d/m/Y", strtotime($fechaOriginal));

                    echo 
                    "<tr class='text-center'>
                        <th scope='row'>$contador</th>
                        <td>{$fila['cliente']}</td>
                        <td>{$fila['zona']}</td>
                        <td>{$fila['cantidad']}</td>
                        <td>{$fila['precio']}</td>
                        <td style='font-weight:bold;'>$totalViajes</td>
                        <td>
                            <form style='display: inline-block; action='editar.php' method='get'>
                            <a href='./Models/editar.php?accion=editar&id={$fila['Id']}&cliente={$fila['cliente']}&zona={$fila['zona']}&cantidad={$fila['cantidad']}&precio={$fila['precio']}'
                                                                
                            class='btn btn-primary'><i class='bi bi-pencil'></i></a>
                            </form>
                            <form style='display: inline-block; method='get'>
                                <a href='./Models/eliminarViajes.php?accion=eliminar&id={$fila['Id']}' class='btn btn-danger'><i class='bi bi-trash'></i></a>
                            </form>                        
                        </td>
                    </tr>";

                    $contador++;
                    $fechaAnterior = $fechaActual;
                }

                // Mostrar el total acumulado para la última fecha fuera del bucle
                if (!$primerRegistro) {
                    echo 
                        "<tr>
                            <td colspan='5' class='text-end' style='font-weight:bold;font-size: 26px;'><strong>Total:</strong></td>
                            <td class='text-center' style='font-weight:bold;font-size: 26px;'>" . $totalAcumulado . "</td>
                        </tr>";
                }
        ?>

    </tbody>
</table>