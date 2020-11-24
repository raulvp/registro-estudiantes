<?php

include "conexiones/conexionbd.php";
conectarbd();

$sqlmostrar = "select idest,nombreest,appaterno,apmaterno,telefono,
cedulaid, direccion from estudiante";
$consulta = mysqli_query($conex, $sqlmostrar);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Jumbotron Template · Bootstrap</title>

    <link rel="canonical" href="css/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <script src="js/crudestudiante.js"></script>

    
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Registro Estudiantes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="principal.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registro</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="registro.php">Registro</a>
          <a class="dropdown-item" href="listado.php">Lista</a>
          <a class="dropdown-item" href="#">Reportes</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  

  <div class="container">
      <h1>Listado Estudiantes Inscritos</h1>
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
      <div id="actualizarDiv">
        <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Cedula Identidad</th>
            <th scope="col">Fono Fijo</th>
            <th scope="col">Celular</th>
            <th scope="col">Direccion</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          
          <?php
  
          $contador=0;
          while($fila = mysqli_fetch_assoc($consulta)){
              $contador++;
              echo "<tr>";
                  $idActualizar = $fila['idest'];
                  echo "<td>".$contador."</td>";
                  echo "<td>".$fila['nombreest']."</td>";
                  echo "<td>".$fila['appaterno']."</td>";
                  echo "<td>".$fila['apmaterno']."</td>";
                  echo "<td>".$fila['cedulaid']."</td>";
                  echo "<td>".$fila['telefono']."</td>";
                  echo "<td>".$fila['direccion']."</td>";
                  
            ?>
                  <td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#update' onClick='actualizarReg(<?php echo $idActualizar;?>)'>Actualizar</button></td>
                  <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete' onClick='eliminarReg(<?php echo $idActualizar;?>)'>Eliminar</button></td>
              </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      </div>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

<div id="contenedorModal">
    <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h4 class="modal-title" id="">Actualizar Registro</h4>  
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            
          </div>
          <div id="contenidoestudiante"> <!--contenido actualizar-->
            <div class="modal-body">
              <!--contenido para mostrar en actualizacion-->



            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="updateEstudiante()">Actualizar</button>
            </div>
          </div><!--fin actualizar-->
        </div>
      </div>
    </div>
  </div><!--fin div contenedorModal-->

<footer class="container">
  <p>&copy; Company 2017-2020</p>
</footer>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="lib/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
