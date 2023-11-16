<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/viajes.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div id="ingreso-datos">

            <h1>VIAJES NICO</h1>



            <form action="AgregarViajes.php" method="post" name="viajesNico">
                <label for="clientes">Clientes</label>
                <select id="clientes">
                    <?php
                    include('arrays.php');
                    foreach ($miArray as $array) {
                        echo "<option value='opcion'" . $array . "'>" . $array . "</option>";
                    }
                    ?>
                </select>
                <h3>Ingrese los viajes</h3>
                <label for="clientes">Nombre del Cliente</label>
                <input id="clientes" type="date" id="sector" name="sector" placeholder="Nombre de cliente"><br>
                <label for="viajes">Cantidad de Viajes</label>
                <input id="viajes" type="number" id="cantidad" name="cantidad" placeholder="Cantidad de viajes"><br>
                <label for="precio">Precio por viaje</label>
                <input id="precio" type="number" id="precio" name="precio" placeholder="Precio del viaje"><br>
                <input type="submit" value="Guardar">
            </form>


            <form action="agregarCliente.php" method="post" id="nuevo-cliente" class="mt-3">
                <h3>Agregar Cliente</h3>
                <input type="text" id="nombreCliente" name="nombreCliente">
                <input type="submit" name="client" value="Agregar">
            </form>

        </div>



        <div id="caja-viajes">

            <?php

                include('tablaViajes.php');

            ?>
        </div>
    </div>





    <script src="script.js"></script>
</body>

</html>