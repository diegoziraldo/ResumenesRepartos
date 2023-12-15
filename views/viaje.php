<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./Public/css/style.css">
    <title>Document</title>
</head>

<body>

    <?php
    include_once('./Models/inicioViajes.php');
    ?>

    <?php
    include_once('navigate.php');
    ?>


    <div class="container">
        <div id="ingreso-datos">
            <?php
            $fechaInicio
            ?>
            <div class="container">
                <button class="btn btn-primary dropdown-toggle btn btn-success w-100" data-bs-toggle="dropdown">Consultar viajes</i></button>
                <ul class="dropdown-menu w-25">
                    <li>
                        <form action="" id="consulta" class="dropdown-item form-group" method="post">
                            <div class="row">
                                <div class="col">
                                    <label for="fechaInicio">Desde</label>
                                    <input id="fechaInicio" type="date" name="fechaInicio" class="form-control" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires');
                                                                                                                        echo date('Y-m-d', strtotime('last Sunday')); ?>">
                                </div>
                                <div class="col">
                                    <label for="fechaFinal">Hasta</label>
                                    <input id="fechaFinal" type="date" name="fechaFinal" class="form-control" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires');
                                                                                                                        echo date('Y-m-d'); ?>">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" value="Buscar" class="btn btn-success w-100 mt-2">
                            </div>
                        </form>
                    </li>
                </ul>
            </div>


            <h3 class="fs-1 mt-4">Ingrese los viajes</h3>
            <form action="?page=agregarViajes" method="post" name="viajesNico" class="form-viajes mt-4">
                <label for="repartidor">REPARTIDOR</label>
                <input id="repartidor" class="form-control mt-0">
                <label for="clientes" class="mt-4">Clientes</label>
                <select id="clientes" name="cliente" class="form-control">
                    <?php
                    include('./Models/arrays.php');
                    foreach ($clientes as $cliente) {
                        echo "<option value='" . $cliente['razonSocial'] . "'>" . $cliente['razonSocial'] . "</option>";
                    }
                    ?>
                </select>
                <label for="zonas" class="mt-4">Zona</label>
                <select id="zonas" name="zona" class="form-control">
                    <?php
                    include('./Models/arrays.php');
                    foreach ($zonas as $zona) {
                        echo "<option value='$zona'>" . $zona . "</option>";
                    }
                    ?>
                </select>
                <label for="fecha" class="mt-4">Fecha</label>
                <input id="fecha" type="date" name="fecha" class="form-control mt-0" value="<?php echo date('Y-m-d'); ?>">
                <label for="viajes" class="mt-4">Cantidad de Viajes</label>
                <input id="viajes" type="number" id="cantidad" name="cantidad" class="form-control mt-0" placeholder="Cantidad de viajes">
                <label for="precio" class="mt-4">Precio por viaje</label>
                <input id="precio" type="number" id="precio" name="precio" class="form-control mt-0" placeholder="Precio del viaje">
                <input type="submit" value="Guardar" class="btn btn-success btn btn-primary w-100 mt-4">
            </form>

        </div>


        <div id="caja-viajes" class="mt-4">
            <?php
            include('tablaViajes.php');
            ?>
        </div>
    </div>


</body>

</html>