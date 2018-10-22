<?php
session_start();
include "funciones.php";
if ($_POST != [])
{
$contrasenia = $_POST["contrasegna"];
$admins = json_decode(file_get_contents("admins.json"), true);
//var_dump($admins);exit;
foreach ($admins as $admin => $datos) {
if ($datos["nombre"] == $_POST["usuario"])
{
  if (password_verify($contrasenia,$datos["contrasena"]))
  {
$_SESSION["autorizado"]="yes";
  header("Location:consultas.php");exit;
  }
}
}

}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <title></title>
  </head>
      <body class="text-center">
  <!-- Barra de navegación -->


  <!-- Primera barra de navegación  -->
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #f2d333;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" style="margin-left:60rem" id="navbarSupportedContent">
<a href="index.php"><button type="button" class="btn  btn-outline-dark" style="background-color: #f2d333;">Volver a la página principal</button></a>
  </div>
  </nav>

  <!-- Segunda barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <img src="imgs/banner-dupla-educacion-BA.png" height="60" alt="">
  <img src="imgs/LogoHDC2018_3D.png" height="90" alt="" style="padding-left:55rem;">
  </nav>

  <!-- fin barra de navegación -->

  <div class="alert alert-secondary" role="alert">
    <div class="centrado">
      <div class="card">
  <div class="card-header">
  Consulta de datos
  </div>
  <div class="card-body">
    <h5 class="card-title">Por favor coloque su usuario y contraseña para ingresar al sistema</h5>
    <!-- Formulario -->
    <form class="" action="login.php" method="post">
    <label for="inputName" class="sr-only">Su nombre de usuario:</label>
    <input type="text" name="usuario" id="inputName" class="form-control" placeholder="nombre de usuario" required autofocus>
    <label for="inputPassword" class="sr-only">Contraseña:</label>
    <input type="password" name="contrasegna" id="inputPassword" class="form-control" placeholder="contraseña" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
  </form>
    <!-- fin del formulario -->
  </div>
</div>
    </div>
  </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
