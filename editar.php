<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <?php

    $id = $_GET['id'];
    $cliente = $_GET['cliente'];
    $zona = $_GET['zona'];
    $cantidad = $_GET['cantidad'];
    $precio = $_GET['precio'];



    
    echo "
    <table class='table border'>

        <thead>
            <tr class='text-center'>
                <th scope='col'>#</th>
                <th scope='col'>Cliente</th>
                <th scope='col'>Zona</th>
                <th scope='col'>Cant. Viajes</th>
                <th scope='col'>Precio por viaje</th>
                <th scope='col'>Acciones</th>
            </tr>
        </thead>
        <tbody>

        $datos = [
            [$id,'$cliente','$zona', $cantidad', '$precio'],
        ];

        foreach ($datos as $fila) {
            echo '<tr>
                    <td>{$fila['id']}</td>
                    <td><input class='form-control text-center' type='text' name='cliente[]' value='{$cliente}'></td>
                    <td><input class='form-control text-center' type='text' name='zona[]' value='{$zona}'></td>
                    <td><input class='form-control text-center' type='number' name='cantidad[]' value='{$cantidad}'></td>
                    <td><input class='form-control text-center' type='number' step='0.01' name='precio[]' value='{$precio}'></td>
                    <td>
                    <div class='d-flex justify-content-center'>
                        <form style='display: inline-block; action='editar.php' method='post'>
                            <a href='editar.php?accion=editar&id={$fila['Id']}' class='btn btn-success'><i class='bi bi-check-lg'></i></a>
                        </form>
                    </div>
                    </td>
                </tr>';
                
            }
    
    </tbody>
    </table>
    
    ";
    ?>


</body>

</html>