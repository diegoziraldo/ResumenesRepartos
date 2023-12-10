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

<form action="./agregarCliente.php" method="post" class="container" id="nuevo-cliente">
    <h2 class="mb-4">Alta de Cliente</h2>

    <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="col-sm-10 form-control">
    </div>

    <div class="row mb-3">
        <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
        <input type="text" id="apellido" name="apellido" class="col-sm-10 form-control">
    </div>

    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Correo Electrónico:</label>
        <input type="email" id="email" name="email" class="col-sm-10 form-control">
    </div>

    <div class="row mb-3">
        <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" class="col-sm-10 form-control">
    </div>

    <div class="row mb-3">
        <label for="direccion" class="col-sm-2 col-form-label">Dirección:</label>
        <input type="text" id="direccion" name="direccion" class="col-sm-10 form-control">
    </div>

    <div class="row mb-3">
        <label for="direccion" class="col-sm-2 col-form-label">Localidad:</label>
        <input type="text" id="localidad" name="localidad" class="col-sm-10 form-control">
    </div>

    <div class="row mb-3">
        <label for="direccion" class="col-sm-2 col-form-label">Razon Social:</label>
        <input type="text" id="razonSocial" name="razonSocial" class="col-sm-10 form-control">
    </div>

    <button type="submit" class="btn btn-primary">Guardar Cliente</button>
</form>




    
</body>
</html>