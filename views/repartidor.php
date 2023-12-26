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
    include_once('navigate.php');

?>
    <div class="container">

        <h3>Repartidores</h3>

        <?php
                include('./Models/arrays.php');
                    foreach ($repartidores as $repartidor) {
                        echo "<option value='$repartidor'>" . $repartidor . "</option>";
                    }





                    
                    ?>


        <button class='btn btn-success' >
            <a class="nav-link" href="./?page=altaRepartidor">Agregar Repartidor</a>
        </button>

    </div>





    
</body>
</html>