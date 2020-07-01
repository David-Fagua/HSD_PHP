
<!--Navbar Superior-->
<nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #000000;">
    <a href="../admin.php" class="navbar-brand" >
        <img src="../../assets/icon/Logo.png" width="40" height="40" alt="HSD PLUS">
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
              <a href="../Error404.php"  >
                <img src="../../assets/icon/ingles.png" width="40" height="40" alt="">
              </a>
            </button>
          </div>
        </li>
      </ul>

    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown navbar-inverse">
            <button  class="btn btn-info" class="btn btn-sec"  data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                <a >
                    <img src="../../assets/icon/Usuario.png" width="30" height="30">
                    <?php echo $_SESSION["usuario"]["nombre"]; ?>
                </a>
            </button>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="Usuario.php" class="badge badge-light" style="color: #000000;"><i class="fa fa-user fa-fw"></i>Usuario</a></li>
                <li><a href="../Error404.php" class="badge badge-light" style="color: #000000;"><i class="fa fa-gear fa-fw"></i> Ajustes</a></li>
                <li><a href="../cerrar-sesion.php" class="badge badge-light" style="color: #000000;"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!--Navbar Izquierdo-->

<div id="barra-lateral" style="background-color: #47A5B4;">
    
    </br>

     <div  id="contenedor-logos-primero" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/1.png" width="25" height="25">
        </div>
        <a  href="usuario.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;"><?php echo $_SESSION["usuario"]["nombre"]; ?></a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/22.png" width="25" height="25">
        </div>
        <a  href="Reserva.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Registro Reserva</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/21.png" width="25" height="25">
        </div>
        <a  href="Ventas.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Registro Ventas</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/2.png" width="25" height="25">
        </div>
        <a  href="Inventario.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Inventario General</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/15.png" width="25" height="25">
        </div>
        <a  href="Proceso.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Producto en Proceso</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/18.png" width="25" height="25">
        </div>
        <a  href="Final.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Producto Final</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/16.png" width="25" height="25">
        </div>
        <a  href="Desechos.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Desechos</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/3.png" width="25" height="25">
        </div>
        <a  href="Usuarios.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Usuarios</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/13.png" width="25" height="25">
        </div>
        <a  href="Gcatalogo.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Gestor de Catalogo</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/5.png" width="25" height="25">
        </div>
        <a  href="id.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Tipo Documento</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/17.png" width="25" height="25">
        </div>
        <a  href="Rol.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Registrar Rol</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/20.png" width="25" height="25">
        </div>
        <a  href="Proveedor.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Registrar Proveedor</a>
    </div>

    <div style="font-size:12px;" class="contenedor-logos">
        <div class="logo">
        <img src="../../assets/icon/colombia.png" width="25" height="25">
        </div>
        <a  href="Ciudades.php" class="title-menu" class="fa fa-sign-out fa-fw" style="color: #ffffff;">Ciudades</a>
    </div>
</div>

