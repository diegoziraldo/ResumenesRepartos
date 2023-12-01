

<?php



    include('connect.php');
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fechaInicioIndex = date('Y-m-d', strtotime('last Sunday'));
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fechaFinalIndex = date('Y-m-d');
    
    $fechaInicio = isset($_POST['fechaInicio']) ? $_POST['fechaInicio'] : $fechaInicioIndex;
    $fechaFin = isset($_POST['fechaFinal']) ? $_POST['fechaFinal'] : $fechaFinalIndex ;



    if ($fechaInicio && $fechaFin) {
        $consulta = "SELECT * FROM viajes WHERE fecha BETWEEN '$fechaInicio' AND '$fechaFin' ORDER BY fecha, cliente, id";
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
