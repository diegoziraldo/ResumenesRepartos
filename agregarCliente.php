<?php

    include ('connect.php');

    $cliente = $_POST['cliente'];
        
    //Aca estamos guardando en la tabla usuarios lo que tenemos guardado en las variables, que obtuvimos en el formulario
    $consulta = "INSERT INTO clientes(cliente) VALUES('$cliente')";
    $resultado = mysqli_query($connect,$consulta);
?>



<!--     <script type="text/javascript">
          function redirect() {
              window.location = "http://localhost:8080/ResumenesRepartos/?page=cliente";
          }
          window.onload = redirect;
    </script> -->