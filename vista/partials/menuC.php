<br/>
<br/>

<div>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #009BDB;">
    <a href="../usuario.php" class="navbar-brand">
    <img src="../../assets/icon/Logo.png" width="40" height="40" alt="HSD PLUS"></a>
    <a href="../usuario.php" style="color: #ffffff;" class="navbar-brand">SHD PLUS</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          &nbsp;
          &nbsp;
          &nbsp;
          <a href="../usuario.php" class="nav-link" style="color: #ffffff;">Inicio
          </a>
          &nbsp;
          &nbsp;
          &nbsp;
          <a href="Catalogo.php" class="nav-link" style="color: #ffffff;">Catalogo
          </a>
          &nbsp;
          &nbsp;
          &nbsp;
          <a href="ConsultarCompras.php" class="nav-link" style="color: #ffffff;">Consultar Compras
          </a>
          &nbsp;
          &nbsp;
          &nbsp;
          <a href="reservarproducto.php" class="nav-link" style="color: #ffffff;">Reservaciones
          </a>
          &nbsp;
          &nbsp;
          &nbsp;
        </li>
      </ul>

      <div>
        <button type="button" class="btn btn-link">
          <a src="../../assets/img/ingles.png">
            <img src="../../assets/icon/ingles.png" width="40" height="40" alt="">
          </a>
        </button>
      </div>
      
      &nbsp;
      &nbsp;

      <div class="btn-group dropleft">
      <button type="button" class="btn btn-link" class="btn btn-sec dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <a href="Catalogo.php" class="nav-link" style="color: #ffffff;">
        <img src="../../assets/icon/Usuario.png" width="40" height="40">
        <?php echo $_SESSION["usuario"]["nombre"]; ?>
      </a> 
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a href="../Error404.php" class="dropdown-item">Usuario</a>
        <a href="../Error404.php" class="dropdown-item">Configuraciones</a>
        <a href="../cerrar-sesion.php" class="dropdown-item" >Cerrar Sesión</a>
      </div>
      </div>

    </div>
  </nav>
</div>