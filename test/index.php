<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="consulta" class="" action="" method="post">
        <label for="fechaInicio">Desde</label>
        <input id="fechaInicio" type="date" name="fechaInicio" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires');
                                                                        echo date('Y-m-d', strtotime('last Monday')); ?>">
        <label for="fechafechaFinal">Hasta</label>
        <input id="fechafechaFinal" type="date" name="fechaFinal" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires');
                                                                            echo date('Y-m-d'); ?>">
        <input class="mb-3" type="submit" value="Consultar">
    </form>
</body>

</html>