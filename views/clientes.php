<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>

<body>


    <?php
    include_once('./navigate.php');

    ?>
    <div class="container">

        <h3>Clientes</h3>


        <?php
            include('arrays.php');

        // Suponiendo que $repartidores es un array con los datos de los repartidores

        echo "
        <table class='table border'>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo Electronico</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Razon Social</th>
        <th>Id</th>
            <th>Acciones</th>
        </tr>";

        foreach ($clientes as $cliente) {
            echo "<tr>";
            // Suponiendo que cada $repartidor es un array asociativo con un campo "id" y un campo "nombre"
            echo "<td><option value='" . $cliente['nombre'] . "'>" . $cliente['nombre'] . "</option></td>";
            echo "<td><option value='" . $cliente['apellido'] . "'>" . $cliente['apellido'] . "</option></td>";
            echo "<td><option value='" . $cliente['email'] . "'>" . $cliente['email'] . "</option></td>";
            echo "<td><option value='" . $cliente['telefono'] . "'>" . $cliente['telefono'] . "</option></td>";
            echo "<td><option value='" . $cliente['direccion'] . "'>" . $cliente['direccion'] . "</option></td>";
            echo "<td><option value='" . $cliente['razonSocial'] . "'>" . $cliente['razonSocial'] . "</option></td>";
            echo "<td><option value='" . $cliente['Id'] . "'>" . $cliente['Id'] . "</option></td>";
            echo "<td>
                    <form style='display: inline-block; action='editar.php' method='get'>
                        <a href='editar.php?accion=editar&id={$fila['Id']}&cliente={$fila['cliente']}&zona={$fila['zona']}&cantidad={$fila['cantidad']}&precio={$fila['precio']}' class='btn btn-primary'><i class='bi bi-pencil'></i></a>
                    </form>
                    <form style='display: inline-block; action='eliminar.php' method='get'>
                        <a href='../eliminar.php?accion=eliminar&id={$cliente['Id']}' class='btn btn-danger'><i class='bi bi-trash'></i></a>
                    </form>                        
                </td>";
            echo "</tr>";
        }

        echo "</table>";

        ?>

        <button class='btn btn-success'>
            <a class="nav-link" href="./?page=altaCliente">Agregar Cliente</a>
        </button>

    </div>






</body>

</html>