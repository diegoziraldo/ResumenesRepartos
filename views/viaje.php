<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
            <h1>Nombre Repartidor</h1>
            <?php
            $fechaInicio
            ?>

            <form action="" id="consulta" class="" method="post">
                <label for="fechaInicio">Desde</label>
                <input id="fechaInicio" type="date" name="fechaInicio" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires');
                                                                                echo date('Y-m-d', strtotime('last Sunday'));  ?>">
                <label for="fechafechaFinal">Hasta</label>
                <input id="fechafechaFinal" type="date" name="fechaFinal" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires');
                                                                                    echo date('Y-m-d'); ?>">
                <input class="mb-3" type="submit" value="Consultar">
            </form>


            <form action="?page=agregarViajes" method="post" name="viajesNico" class="form-viajes ">
                <label for="clientes">Clientes</label>
                <select id="clientes" name="cliente">
                    <?php
                    include('./Models/arrays.php');
                    foreach ($clientes as $cliente) {
                        echo "<option value='" . $cliente['razonSocial'] . "'>" . $cliente['razonSocial'] . "</option>";

                    }
                    ?>
                </select>
                <label for="zonas">Zona</label>
                <select id="zonas" name="zona">
                    <?php
                    include('./Models/arrays.php');
                    foreach ($zonas as $zona) {
                        echo "<option value='$zona'>" . $zona . "</option>";
                    }
                    ?>
                </select>
                <div id="ingreso-viajes">Ingrese los viajes</div>
                <label for="fecha">Fecha</label>
                <input id="fecha" type="date" name="fecha" value="<?php echo date('Y-m-d'); ?>"><br>
                <label for="viajes">Cantidad de Viajes</label>
                <input id="viajes" type="number" id="cantidad" name="cantidad" placeholder="Cantidad de viajes"><br>
                <label for="precio">Precio por viaje</label>
                <input id="precio" type="number" id="precio" name="precio" placeholder="Precio del viaje"><br>
                <input type="submit" value="Guardar">
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