<!DOCTYPE html>
<html>
<head>
  <title>Iniciar Sesión</title>

  <link rel="icon" type="image/png" href="../assets/icon/Logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
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
        </li>
      </ul>    
      
      <div>
        <button type="button" class="btn btn-info">
          <a href="start.php"  >
            <img src="../assets/icon/ingles.png" width="40" height="40" alt="">
          </a>
        </button>
      </div>
      
      &nbsp;
      &nbsp;

      <div class="btn-group dropleft">
      <button type="button" class="btn btn-info" class="btn btn-sec dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="../assets/icon/Usuario.png" width="40" height="40" alt="">
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="./sesion/iniciosesion.php">Iniciar Sesión</a>
        <a class="dropdown-item" href="./sesion/Registrar.php">Registrar</a>
      </div>
      </div>

    </div>
  </nav>
</div>

<!--Inicio de sesión estructura-->

<form action="" method="POST">
  <?php
    if(isset($errorLogin)){
      echo $errorLogin;
    }
  ?>
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
            <input type="text" placeholder="Usuario" class="form-control" id="user-username">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Contraseña" class="form-control" id="form-password">
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
          <button style="float:center;" class="btn btn-primary btn-lg" role="button" type="submit" class="mybtn">Ingresar</button>
        </center>
    </form>
  </div>
</div>
</form>

<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--PHP Systen-->

 <?php

//inicio Admin=admin/inicio.php 
//inicio Cliente=cliente/catalogo.php

include_once 'includes/user.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'admin/inicio.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'admin/home.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'vistas/login.php';
    }
}else{
    //echo "login";
    include_once 'vistas/login.php';
}

?>