<?php

    include ('connect.php');
    
    $sector = $_POST['sector'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
        
    echo $sector;
    echo $cantidad;
    echo $precio;

    //Aca estamos guardando en la tabla usuarios lo que tenemos guardado en las variables, que obtuvimos en el formulario
    $consulta = "INSERT INTO viajes (sector, cantidad, precio) VALUES('$sector', '$cantidad', '$precio')";
    $resultado = mysqli_query($connect,$consulta);
?>



    <script type="text/javascript">
          function redirect() {
              window.location = "http://localhost:8080/ResumenesRepartos";
          }
          window.onload = redirect;
    </script>