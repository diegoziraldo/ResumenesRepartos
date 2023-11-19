
<?php

include('connect.php');

/* $fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFinal']; */

// Preparar la consulta SQL

// Definir el rango de fechas solo si se han establecido en el formulario
$fechaInicio = isset($_POST['fechaInicio']) ? $_POST['fechaInicio'] : null;
$fechaFin = isset($_POST['fechaFinal']) ? $_POST['fechaFinal'] : null;

if ($fechaInicio && $fechaFin) {
    $consulta = "SELECT * FROM viajes WHERE fecha BETWEEN '$fechaInicio' AND '$fechaFin' ORDER BY fecha, cliente, id";
} else {
    $consulta = "SELECT * FROM viajes ORDER BY fecha, cliente, id";
}

/* $consulta = "SELECT * FROM viajes WHERE fecha BETWEEN '$fechaInicio' AND '$fechaFin' ORDER BY fecha, cliente, id";
 */


// Ejecutar la consulta
$resultado = mysqli_query($connect, $consulta);
?>

<!-- <script type="text/javascript">
          function redirect() {
              window.location = "http://localhost:8080/ResumenesRepartos";
          }
          window.onload = redirect;
</script> -->