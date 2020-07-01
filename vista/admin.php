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
<body>

<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>

<!--Navbar Superior-->

<nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #000000;">
    <a href="admin.php" class="navbar-brand" >
        <img src="../assets/icon/Logo.png" width="40" height="40" alt="HSD PLUS">
    </a>
    <a class="badge badge-info">
        <?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
      
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
            <button  class="btn btn-info" class="btn btn-sec"  data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                <a >
                    <img src="../assets/icon/Usuario.png" width="30" height="30">
                    <?php echo $_SESSION["usuario"]["nombre"]; ?>
                </a>
            </button>
            <ul class="dropdown-menu dropdown-user">
                <li><a class="badge badge-light" href="admin/Usuario.php" style="color: #000000;"><i class="fa fa-user fa-fw"></i>Usuario</a></li>
                <li><a class="badge badge-light" href="Error404.php" style="color: #000000;"><i class="fa fa-gear fa-fw"></i> Ajustes</a></li>
                <li><a class="badge badge-light" href="cerrar-sesion.php" style="color: #000000;"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!--Navbar Izquierdo-->

<div id="barra-lateral" style="background-color: #47A5B4;">

    </br>
    
     <div  id="contenedor-logos-primero" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/1.png" width="25" height="25">
        </div>
        <a  href="admin/usuario.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;"><?php echo $_SESSION["usuario"]["nombre"]; ?></a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/22.png" width="25" height="25">
        </div>
        <a  href="admin/Reserva.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Registro Reserva</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/21.png" width="25" height="25">
        </div>
        <a  href="admin/Ventas.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Registro Ventas</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/2.png" width="25" height="25">
        </div>
        <a  href="admin/Inventario.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Inventario General</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/15.png" width="25" height="25">
        </div>
        <a  href="admin/Proceso.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Producto en Proceso</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/18.png" width="25" height="25">
        </div>
        <a  href="admin/Final.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Producto Final</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/16.png" width="25" height="25">
        </div>
        <a  href="admin/Desechos.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Desechos</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/3.png" width="25" height="25">
        </div>
        <a  href="admin/Usuarios.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Usuarios</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/13.png" width="25" height="25">
        </div>
        <a  href="admin/Gcatalogo.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Gestor de Catalogo</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/5.png" width="25" height="25">
        </div>
        <a  href="admin/id.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Tipo Documento</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/17.png" width="25" height="25">
        </div>
        <a  href="admin/Rol.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Registrar Rol</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/20.png" width="25" height="25">
        </div>
        <a  href="admin/Proveedor.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Registrar Proveedor</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../assets/icon/colombia.png" width="25" height="25">
        </div>
        <a  href="admin/Ciudades.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Ciudades</a>
    </div>
</div>

<br></br>

<div id="body">
    <div id="texto">
        <!--Cuerpo-->
        <p id="texto-contenedor-1">Nueva Fase de desarrollo en php, el sistema está en pleno desarrollo.</p>
    </div>

    <div id="foto">
            <img id="foto-contenedor-1" src="../assets/icon/1.png"/>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/overhang.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/metisMenu.min.js"></script>
<script src="../assets/js/startmin.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
