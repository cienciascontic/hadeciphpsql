<?php
include "funciones.php";
// Armar array de consultas
$consultas = [
[  "nombre" => "Estudiantes por docente"],
[  "nombre" => "Estudiantes por grupo"],
[  "nombre" => "Desafíos"],
];
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

    <title>Inscripción al hackatón Desafíos Científicos 2018</title>
  </head>


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
<div class="jumbotron bg-success">
  <!-- Formulario de inscripción -->
<!-- Cabecera -->
<div class="card mx-auto text-black bg-light mb-3" style="max-width: 25rem";>
<div class="card-header" style="background:#f2d333"><h5>Consulta de datos</h5></div>

<div class="card-body">
  <small id="emailHelp" class="form-text text-muted">Elija el tipo de consulta a realizar seleccionando una de las opciones</small>
  <!-- <h5 class="card-title"></h5> Este es el subtítulo -->
    <p class="card-text text-dark">
      <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    clic para desplegar opciones
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="consultasxdocente.php?busqueda_DNI_docente=11111111">Estudiantes por docente (por DNI)</a>
    <a class="dropdown-item" href="consultasxgrupo.php?busqueda_grupo=AR">Estudiantes por grupo (por nombre de grupo)</a>
    <a class="dropdown-item" href="consultasxdesafio.php?busqueda_desafio=NE">Desafíos (por nombre y devuelve descripción y tutor)</a>
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
