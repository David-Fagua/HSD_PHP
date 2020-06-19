<!DOCTYPE html>
<html lang="es">
<head>
	<title>Consultar Compras</title>

	<link rel="icon" type="image/png" href="../../Img/Logo.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">

</head>
<body>

<br/>
<br/>
<br/>

<div>
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <a href="Catalogo.php" class="navbar-brand" href="#">
    <img src="../../img/Logo.png" width="40" height="40" alt="HSD PLUS"></a>
    <a href="Catalogo.php" class="navbar-brand" href="#">SHD PLUS</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <a href="Catalogo.php" class="nav-link" style="color: #47A5B4;">Catalogo
          </a>
          <a href="ConsultarCompras.php" class="nav-link" style="color: #47A5B4;">Consultar Compras
          </a>
          <a href="reservarproducto.php" class="nav-link" style="color: #47A5B4;">Reservaciones
          </a>
        </li>
      </ul>
      <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          <button style="color:#47A5B4;" class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
      <div class="btn-group dropleft">
        <button style="background-color: #ffffff;" class="button" class="btn btn-sec btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="../../img/Usuario.png" width="40" height="40" alt="">
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="Cliente.php">Cliente</a>
          <a class="dropdown-item" href="Cliente.php">Configuracion</a>
          <a class="dropdown-item" href="../../Inicio.php">Cerrar sesión</a>
        </div>
      </nav>
    </div>
  </nav>
</div>

<div class="card mb-3">
  <h1 class="page-header">Compras Realizadas</h1>
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </tfoot>
      <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>2012/09/26</td>
        <td>$217,500</td>
      </tr>
      <tr>
        <td>Michelle House</td>
        <td>Integration Specialist</td>
        <td>Sidney</td>
        <td>37</td>
        <td>2011/06/02</td>
        <td>$95,400</td>
      </tr>
      <tr>
        <td>Zorita Serrano</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>56</td>
        <td>2012/06/01</td>
        <td>$115,000</td>
      </tr>
      <tr>
        <td>Jonas Alexander</td>
        <td>Developer</td>
        <td>San Francisco</td>
        <td>30</td>
        <td>2010/07/14</td>
        <td>$86,500</td>
      </tr>
      <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>2008/11/13</td>
        <td>$183,000</td>
      </tr>
      <tr>
        <td>Michael Bruce</td>
        <td>Javascript Developer</td>
        <td>Singapore</td>
        <td>29</td>
        <td>2011/06/27</td>
        <td>$183,000</td>
      </tr>
      <tr>
        <td>Donna Snider</td>
        <td>Customer Support</td>
        <td>New York</td>
        <td>27</td>
        <td>2011/01/25</td>
        <td>$112,000</td>
      </tr>
    </table>
  </div>
</div>

<div class="container">
  <div class="row">
		<div class="col-6 col-md">
			<h5 style="color:#47A5B4;">Información útil</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Contacto & Ayuda</a></li>
        <li><a class="text-muted" href="#">Consejos de seguridad</a></li>
				<li><a class="text-muted" href="#">Terminos & Condiciones</a></li>
				<li><a class="text-muted" href="#">Acaerca de HSD Plus</a></li>
				<li><a class="text-muted" href="#">Sumate a nosotros</a></li>
      </ul>
		</div>
		<div class="col-6 col-md">
			<h5 style="color:#47A5B4;">Servicios</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Registrate</a></li>
				<li><a class="text-muted" href="#">Reserva</a></li>
				<li><a class="text-muted" href="#">Consulta</a></li>
			</ul>
		</div>
		<div class="col-6 col-md">
			<h5 style="color:#47A5B4;">Contactanos</h5>
			<ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Equipo</a></li>
				<li><a class="text-muted" href="#">Localización</a></li>
				<li><a class="text-muted" href="#">Privacidad</a></li>
				<li><a class="text-muted" href="#">Terminos</a></li>
			</ul>
		</div>
	</div>
	<div class="col-12 col-md">
			<small class="d-block mb-3 text-center text-muted">Copyright &copy; 2018-2019 HSD Plus</small>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
