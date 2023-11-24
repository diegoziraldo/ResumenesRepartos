

<?php
    include('connect.php');
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fechaInicio = date('Y-m-d', strtotime('last Monday'));
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fechaFinal = date('Y-m-d');

    if ($fechaInicio && $fechaFinal) {
        $consulta = "SELECT * FROM viajes WHERE fecha BETWEEN '$fechaInicio' AND '$fechaFinal' ORDER BY fecha, cliente, id";
    } else {
        $consulta = "SELECT * FROM viajes ORDER BY fecha, cliente, id";
    }

    $resultado = mysqli_query($connect, $consulta);
?>

<!-- <script type="text/javascript">
          function redirect() {
              window.location = "http://localhost:8080/ResumenesRepartos";
          }
          window.onload = redirect;
    </script> -->
