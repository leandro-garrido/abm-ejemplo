<?php
// 1) Conexion
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "escuela");

// 2) Almacenamos los datos del envío POST
$dni = $_POST['dni'];

// 3) Preparar la orden SQL
// => Selecciona todos los campos de la tabla alumno donde el campo dni sea igual a $dni
$consulta= "SELECT * FROM alumno WHERE dni=$dni";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
$repuesta=mysqli_query ($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

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

    <?php
    //6) Filtramos los diferentes resultados y realizamos una accion definida para cada uno.
    // Si en el array $datos es de tipo NULL, ejecuta el bloque de instrucciones.
    if (is_null($datos)){ ?>
      <div class="container-fluid p-3">
        <h2>Modificar</h2>
        <p> El DNI ingresado no esta en la base de datos.</p>
        <form action="" method="post">
          <button class="btn btn-primary" type="submit" name="volver" formaction="modificar.html">Volver</button>
        </form>
      </div>
    <?php } else {
      // De lo contrario, asignamos a diferentes variables los respectivos valores del array $datos.
      $dni=$datos["dni"];
      $nombre=$datos["nombre"];
      $apellido=$datos["apellido"];?>
      <div class="container-fluid p-3">
        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos del alumno.</p>
        <form action="" method="post">
          <div class="form-group row">
            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">DNI</label>
            <div class="col-sm-10 col-md-10 col-lg-10">
              <input class="form-control" type="text" name="dni" placeholder="DNI" value="<?php echo "$dni"; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Nombre</label>
            <div class="col-sm-10 col-md-10 col-lg-10">
              <input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo "$nombre"; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Apellido</label>
            <div class="col-sm-10 col-md-10 col-lg-10">
              <input class="form-control" type="text" name="apellido" placeholder="Apellido" value="<?php echo "$apellido"; ?>">
            </div>
          </div>
          <input class="btn btn-primary" type="submit" name="guardar_cambios" value="Guardar Cambios">
          <button class="btn btn-primary" type="submit" name="Cancelar" formaction="modificar.html">Cancelar</button>
        </form>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){
          // 1') Conexion
          $conexion = mysqli_connect("127.0.0.1", "root", "");
          mysqli_select_db($conexion, "escuela");

          // 2') Almacenamos los datos actualizados del envío POST
          $dni=$_POST['dni'];
          $nombre=$_POST['nombre'];
          $apellido=$_POST['apellido'];

          // 3') Preparar la orden SQL
          $consulta = "UPDATE alumno SET dni='$dni', nombre='$nombre', apellido='$apellido' WHERE dni=$dni";

          // 4') Ejecutar la orden y actualizamos los datos
          mysqli_query($conexion, $consulta);
          header('Location: index.php');
        }?>
      </div>
    <?php } ?>

    <div class="navbar navbar-light navbar-expand-sm bg-dark navbar-dark navbar-light justify-content-between"></div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
