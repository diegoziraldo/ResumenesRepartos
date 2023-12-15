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
  <div class="container mt-4" id="ingresoUsuario">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Login de administrador
          </div>
          <div class="card-body">
            <form action="/login" method="post">
              <div class="mb-3">
                <label for="admin" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="email" name="admin" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    
    </body>
</html>