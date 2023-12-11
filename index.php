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
    function includeControllers($controllersName)
    {
        require_once("Controllers/{$controllersName}.php");
    }

    $page = $_GET['page'] ?? '/';
    $routes = [
        "/" => "HomeControllers",
        "cliente" => "ClientesControllers",
        "repartidor" => "RepartidorControllers",
        "reporte" => "ReportesControllers",
        "viaje" => "ViajesControllers",
        "altaCliente" => "AltaClientesControllers",
        "guardarCliente" => "GuardarClientesControllers",
        "eliminar" => "eliminar.php",

    ];
    $controllersName = $routes[$page] ?? null;

    if ($controllersName) {
        includeControllers($controllersName);
        $controller = new $controllersName(); // Crear una instancia del controlador
        $action = 'render';
        if (method_exists($controller, $action)) {
            $controller->$action(); // Llamar al método render del controlador
        } else {
            http_response_code(404);
            echo "<h1>Página no encontrada</h1>";
        }
    } else {
        http_response_code(404);
        echo "<h1>Página no encontrada</h1>";
    }
    ?>

</body>

</html>