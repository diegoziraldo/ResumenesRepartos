<?php

    include ('connect.php');
    
    $fecha = $_POST['fecha'];
    $zona = $_POST['zona'];
    $cantidad = intval($_POST['cantidad']);
    $precio = intval($_POST['precio']);
    $cliente = $_POST['cliente'];
        
    


    //Aca estamos guardando en la tabla usuarios lo que tenemos guardado en las variables, que obtuvimos en el formulario
    $consulta = "INSERT INTO viajes (fecha, zona, cantidad, precio, cliente) VALUES('$fecha', '$zona', '$cantidad', '$precio', '$cliente')";
    $resultado = mysqli_query($connect,$consulta);
?>



    <script type="text/javascript">
          function redirect() {
              window.location = "http://localhost:8080/ResumenesRepartos";
          }
          window.onload = redirect;
    </script>