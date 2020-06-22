<!DOCTYPE html>
<html lang="es">
<head>
  
  <title>Iniciar Sesión</title>

  <link rel="icon" type="image/png" href="../assets/icon/Logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/overhang.min.css" />
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  
</head>

<body>

<br></br>
</br>

<!-- Navbar -->

<div>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #47a5b4;">
    <a href="../../HSD_php/index.php" class="navbar-brand" >
      <img src="../assets/icon/Logo.png" width="40" height="40" alt="HSD PLUS"></a>
      <a href="../../HSD_php/index.php" class="navbar-brand" style="color: #ffffff;">HSD PLUS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
      </div>
    </a>
  </nav>
</div>

<!--Inicio de sesión estructura-->

<div class="row">
  <div class="col-md-3">
    </div>
    <div class="col-md-6">
    <form id="loginForm" action="validarCode.php" method="POST" role="form" class="border border-light p-5" style="background-color: #47a5b4;">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <center>
            <img src="../assets/icon/Usuario.png" width="100" height="100" alt="HSD PLUS">
            <h2>Iniciar Sesión</h2>
          </center>
          <div class="myform-bottom">
            <form role="form" action="./Admin/inicio.php" method="post">
              <div class="form-group row">
                <h2 for="usuario" class="col-sm-4 col-form-label">Usuario</h2>
                <div class="col-sm-8">
                  <input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="Usuario">
                </div>
              </div>
              <div class="form-group row">
                <h2 for="Contraseña" class="col-sm-4 col-form-label">Contraseña</h2>
                <div class="col-sm-8">
                  <input type="password" placeholder="Contraseña" name="txtPassword" class="form-control" required id="password">
                </div>
              </div>
              <div class="text-center">
                <h6>¿Olvido su
                  <a href="Recordar.php" style="color: #ffffff;">Contraseña</a>
                  ?
                </h6>
              </div>
              <div class="text-center">
                <h6>¿No esta Registrado?
                  <a href="Registrar.php" style="color: #ffffff;">Registrarme</a>
                </h6>
              </div>
              <br/>
              <center>
                <button style="float:center;" class="btn btn-light btn-lg" role="button" type="submit" class="mybtn">
                  Ingresar
                </button>
              </center>
            </form>
          </div>
        </div>
      </div>
    <div class="col-md-3">
    </div>
  </form>
  </div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/overhang.min.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>
