<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>ABM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>
  <body class="">
    <div class="container">
      <header>
        <div class="container-img d-flex justify-content-center p-3">
          <img class="logo-img" src="img/logo.png" alt="">
        </div>
        <nav class="navbar navbar-light navbar-expand-sm bg-dark navbar-dark navbar-light justify-content-between"></nav>
      </header>
      <div class="row p-3">
        <div class="container border p-3">
          <h2>Iniciar sesión</h2>
          <p>Ingrese su nombre de usuario y contraseña.</p>
          <form action="index.php" method="post">
            <div class="form-group">
              <label>Nombre de usuario</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <div class="navbar bg-dark navbar-dark"></div>
        </div>
      </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
