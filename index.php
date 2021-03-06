<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Loguin sistema registro</title>

    <link rel="canonical" href="css/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/estilospropios.css" rel="stylesheet">

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
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/misestilos.css" rel="stylesheet">
    <script>
     
      function ingresar(){

        $(document).ready(function(){ 
          var correo = $('#inputEmail').val();
          var contra = $('#inputPassword').val();
          $.post('verificar.php',{valor1:correo,valor2:contra},function(result){
              $('#valores').html(result); 
        });

       });
      }

    </script>
  </head>
  <body class="text-center colorfondologuin">
    <form class="form-signin">
  <img class="mb-4" src="img/incos.png" alt="" width="140" height="170">
  <h1 class="h3 mb-3 font-weight-normal">Registro Estudiantes</h1>
  <div id="valores">
  </div>
  <label for="inputEmail" class="sr-only">Correo electronico</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Correo electronico" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recuerdame
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="button" onClick="ingresar()">Ingresar</button>
  <p class="mt-5 mb-3 text-muted">&copy; Derechos reservados INCOS 2020</p>
</form>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="lib/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
