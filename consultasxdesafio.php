
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>

    <!-- Primera barra de navegación  -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #f2d333;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" style="margin-left:60rem" id="navbarSupportedContent">
    <a href="consultas.php"><button type="button" class="btn  btn-outline-dark" style="background-color: #f2d333;">Volver a menú Consultas</button></a>
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
    <div class="card-header" style="background:#f2d333"><h5>Consulta de desafíos</h5></div>
    <div class="card-body">


<div class="alert alert-secondary w-75" role="alert">
  <form class="form-group pt-2" action="" method="get">
    <input type="text" name="busqueda_desafio" value="" placeholder="Código del desafío">
    <button type="submit" name="" class="btn btn-success">Realizar consulta</button>
     <small id="emailHelp" class="form-text text-muted">Tipee el código del desafío. Por ejemplo: <b>ART-412</b></small>
  </form>


<?php

$dsn = "mysql:host=127.0.0.1;dbname=hadeci;port=3306;";
$usuario = "root";
$pass = "Base_123";

try {
  $db = new PDO($dsn, $usuario, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
  echo "Hubo un error";exit;
}

// echo "Todo salio bien!<br>";

// $consulta = $db->prepare("SELECT docentes.nombre, docentes.apellido from docentes values('Moreno')");

// $consulta->bindValue(":nombre", "Dario");
// $consulta->bindValue(":apellido", "Sus");

// $consulta->execute();


// SELECT
$nomDesafio = $_GET["busqueda_desafio"];
// Consulta para traer el desafío
$consulta_des = $db->prepare("SELECT desafios.nombre, desafios.descripcion, desafios.ID from desafios
where desafios.nombre = '$nomDesafio'");
$consulta_des->execute();
$resultados_des = $consulta_des->fetchAll(PDO::FETCH_ASSOC);


  foreach ($resultados_des as $desafio) {
  echo "<b>Desafío:</b> ".$desafio["nombre"]."<br>";
  echo $desafio["descripcion"]."<br>"."<br>";
  $ID_del_desafio = $desafio["ID"];
};



// Consulta para traer el tutor y los estudiantes
$cant_est = 0;
$consulta = $db->prepare("SELECT tutores.ID_desafio, tutores.Nombre, tutores.Apellido, estudiantes.nombre, estudiantes.apellido, estudiantes.DNI  from grupos
inner join estudiantes on grupos.ID = estudiantes.ID_grupo
inner join tutores on grupos.ID_tutor = tutores.ID
where tutores.ID_desafio = '$ID_del_desafio'");
$consulta->execute();


  $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
  foreach ($resultados as $dato) {
    if ($cant_est == 0) {
      echo "<b>Tutor:</b> ".$dato["Nombre"]." ".$dato["Apellido"]."<br>"."<br>";
    };
    $cant_est = $cant_est + 1;
  echo $cant_est.". ".$dato["nombre"] . " " . $dato["apellido"] . " " . $dato["DNI"] ."<br>";
  };





?>
</div>
</div>
  </body>
</html>
