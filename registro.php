<?php
include "funciones.php";
if ($_POST != [])
{
  $usuarioNuevo[] = armarUsuarioConClave();
  $jsondeusuarios = json_encode($usuarioNuevo);
  //var_dump(file_get_contents("usuarios.json") != "");
  if (file_get_contents("admins.json") == "")
  {
    file_put_contents("admins.json",$jsondeusuarios);
  }
  else
  {
    $usuariosExistentes = json_decode(file_get_contents("admins.json"), true);
    $usuariosExistentes [] = $usuarioNuevo[0];
    file_put_contents("admins.json",json_encode($usuariosExistentes));
  }
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registro de administradores</title>
  </head>


    <!-- Primera barra de navegación  -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #f2d333;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" style="margin-left:60rem" id="navbarSupportedContent">
<a href="login.php"><button type="button" class="btn  btn-outline-dark" style="background-color: #f2d333;">Ir a login</button></a>
    </div>
    </nav>

    <!-- Segunda barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <img src="imgs/banner-dupla-educacion-BA.png" height="60" alt="">
    <img src="imgs/LogoHDC2018_3D.png" height="90" alt="" style="padding-left:55rem;">
    </nav>

    <!-- fin barra de navegación -->
<div class="jumbotron bg-success">
  <!-- Formulario de inscripción -->
<!-- Cabecera -->
<div class="card mx-auto text-black bg-light mb-3" style="max-width: 75rem";>
<div class="card-header" style="background:#f2d333"><h5>Formulario de registro</h5></div>
<div class="card-body">
  <!-- <h5 class="card-title"></h5> Este es el subtítulo -->
    <p class="card-text text-dark">
        <!-- Acá empieza el formulario -->
        <form method="post" action="registro.php">
          <div class="form-group">
              <div class="row">
                <div class="col">
                  <input type="text" name="nombredeusuario" class="form-control" placeholder="Usuario">
                </div>
                <div class="col">
                  <input type="Password" name="contrasenia" class="form-control" placeholder="Contraseña">
                </div>
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </p>
    </div>
  </div>

<!-- Repetir formulario -->
</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
