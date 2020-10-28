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
  <body class="body-tamaño">
    <header>
      <div class="container-img d-flex justify-content-center">
        <img class="logo-img" src="img/logo.png" alt="">
      </div>
      <nav class="navbar navbar-light navbar-expand-sm bg-dark navbar-dark navbar-light justify-content-between">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alta.html">Agregar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="baja.html">Eliminar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="modificar.html">Modificar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#"></a>
          </li>
        </ul>
      </nav>
    </header>

    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
      </tr>
         <?php
         $conexion = mysqli_connect("127.0.0.1", "root", "");
         mysqli_select_db($conexion, "escuela");
         $consulta="SELECT*FROM alumno";
         $datos= mysqli_query($conexion, $consulta);

         while ($fila2=mysqli_fetch_array($datos)) {
         echo "<tr>";
         echo "<td>";
         echo $fila2 ["id"];
         echo "</td>";
         echo "<td>";
         echo $fila2 ["dni"];
         echo "</td>";
         echo "<td>";
         echo $fila2 ["nombre"];
         echo "</td>";
         echo "<td>";
         echo $fila2 ["apellido"];
         echo "</td>";
         }

         ?>
      </tr>
    </table>

    <div class="navbar navbar-light navbar-expand-sm bg-dark navbar-dark navbar-light justify-content-between"></div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
