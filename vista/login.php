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

<br/>
<br/>
<br/>
<br/>

<!-- Navbar -->

<div>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #47a5b4;">
    <a href="../../HSD_php/index.php" class="navbar-brand" >
      <img src="../assets/icon/Logo.png" width="40" height="40" alt="HSD PLUS"></a>
      <a href="../../HSD_php/index.php" class="navbar-brand" >HSD PLUS</a>
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

<form id="loginForm" action="validarCode.php" method="POST" role="form">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <center>
        <img src="../assets/icon/Usuario.png" width="100" height="100" alt="HSD PLUS">
        <h2>Iniciar Sesión</h2>
      </center>
      <div class="myform-bottom">
        <form role="form" action="./Admin/inicio.php" method="post">
          <div class="form-group">
            <input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="usuario">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Contraseña" name="txtPassword" class="form-control" required id="password">
          </div>
          <div class="text-center">
            <p>No Recuerdo mi Contraseña
              <a href="Recordar.php">Recordar contraseña</a>
            </p>
          </div>
          <div class="text-center">
            <p>No estoy registrado
              <a href="Registrar.php">Registrar</a>
            </p>
          </div>
          <br/>
          <center>
            <button style="float:center;" class="btn btn-primary btn-lg" role="button" type="submit" class="mybtn">
              Ingresar
            </button>
          </center>
        </form>
      </div>
    </div>
  </div>
</form>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/overhang.min.js"></script>
<script src="assets/js/app.js"></script>

</body>
</html>

<!--PHP Systen-->

 <?php

//inicio Admin=admin/inicio.php 
//inicio Cliente=cliente/catalogo.php

?>
