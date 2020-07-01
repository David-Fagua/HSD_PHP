<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>

  <?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../assets/icon/Logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../assets/css/index_style.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/timeline.css" rel="stylesheet">
    <link href="../assets/css/startmin.css" rel="stylesheet">
    <link href="../assets/css/morris.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="background-color: black; position: relative; width: 100%; height: 500px; " id="particles-js">

<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:../admin.php");
    }
} else {
    header("location:../login.php");
}
?>

<br/>
<br/>

<div>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #009BDB;">
    <a href="usuario.php" class="navbar-brand">
    <img src="../assets/icon/Logo.png" width="40" height="40" alt="HSD PLUS"></a>
    <a class="badge badge-light" style="color: #000000">
        <?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?>
    </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          &nbsp;
          &nbsp;
          &nbsp;
          <a href="usuario.php" class="nav-link" style="color: #ffffff;">Inicio
          </a>
          &nbsp;
          &nbsp;
          &nbsp;
          <a href="cliente/catalogo.php" class="nav-link" style="color: #ffffff;">Catalogo
          </a>
          &nbsp;
          &nbsp;
          &nbsp;
          <a href="cliente/ConsultarCompras.php" class="nav-link" style="color: #ffffff;">Consultar Compras
          </a>
          &nbsp;
          &nbsp;
          &nbsp;
          <a href="cliente/reservar.php" class="nav-link" style="color: #ffffff;">Reservaciones
          </a>
          &nbsp;
          &nbsp;
          &nbsp;
        </li>
      </ul>

      <ul class="nav navbar-left navbar-top-links">
        <li class="dropdown navbar-inverse">
          <div>
            <button type="button" class="btn btn-link" >
              <a href="Error404.php"  >
                <img src="../assets/icon/ingles.png" width="40" height="40" alt="">
              </a>
            </button>
          </div>
        </li>
      </ul>

      <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown navbar-inverse">
          <button  class="btn btn-light" class="btn btn-sec"  data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
              <a >
                  <img src="../assets/icon/Usuario.png" width="30" height="30">
                  <?php echo $_SESSION["usuario"]["nombre"]; ?>
              </a>
          </button>
          <ul class="dropdown-menu dropdown-user">
              <li><a href="error500.php.php" class="badge badge-light" style="color: #000000;"><i class="fa fa-user fa-fw"></i>Usuario</a></li>
              <li><a href="Error404.php" class="badge badge-light" style="color: #000000;"><i class="fa fa-gear fa-fw"></i> Ajustes</a></li>
              <li><a href="cerrar-sesion.php" class="badge badge-light" style="color: #000000;"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </nav>
</div>

</br>

</br>

<center>
<div class="container">
  <div class="row featurette">
    <div>
      <img src="../assets/img/en proceso.png"  class="card-img-top" alt="img">
    </div>
  </div>
</div>
</center>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>