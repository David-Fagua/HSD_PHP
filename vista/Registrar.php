<!DOCTYPE html>
<html lang="es">
<head>

	<title>Registrar</title>

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
      </div>
    </a>
  </nav>
</div>

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <formaction=""  onsubmit="return validarformulario()" method="post" class="border border-light p-5">
      <center>
        <h2>Crear Cuenta</h2>
      </center>
      <center>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Apellido">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Clave">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Confirmar Clavee">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Correo">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Confirmar Correo">
        </div>
        <div class="form-group">
          <input id="correoId"  required="true" type="text" class="form-control" placeholder="Telefono">
        </div>
      </center>
      <center>
        <a href="inicio.html" style="float:center;" class="btn btn-primary btn-lg" role="button">Registrar</a>
      </center>
    </form>
  </div>
</div>

<br>
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>