<?php

    include ('connect.php');

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $razonSocial = $_POST['razonSocial'];
        
    //Aca estamos guardando en la tabla usuarios lo que tenemos guardado en las variables, que obtuvimos en el formulario
    $consulta = "INSERT INTO clientes(nombre, apellido, email, telefono, direccion,localidad, razonSocial) VALUES ('$nombre', '$apellido', '$email', '$telefono', '$direccion', '$localidad', '$razonSocial')";
    $resultado = mysqli_query($connect,$consulta);
?>



    <script type="text/javascript">
          function redirect() {
              window.location = "http://localhost:8080/ResumenesRepartos/?page=cliente";
          }
          window.onload = redirect;
    </script>