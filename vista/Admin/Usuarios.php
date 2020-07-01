<!DOCTYPE html>
<html lang="es">
<head>
    <title>Usuarios</title>

<?php include '../partials/headA.php';?>

<?php include '../partials/menuA.php';?>

<?php 

	$conexion=mysqli_connect('localhost','david','qwerty12','hsd_plus');

 ?>

</br>
</br>

<br></br>

<div id="body" class="row">
  <div class="col-md-1">
  </div>
    <div class="col-md-10">

      <div class="card mb-3">
          <div class="table-responsive">
            <center>
              <h2>Usuarios</h2>
            </center>
              <p>
                <table class="table table-bordered" id="dataTable" width="100%">
				<tr>
					<td>id</td>
					<td>nombre</td>
					<td>usuario</td>
					<td>email</td>
					<td>password</td>
					<td>privilegio</td>	
					<td>fecha_registro</td>	
				</tr>

				<?php 
				$sql="SELECT * from usuarios";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				 ?>

				<tr>
					<td><?php echo $mostrar['id'] ?></td>
					<td><?php echo $mostrar['nombre'] ?></td>
					<td><?php echo $mostrar['usuario'] ?></td>
					<td><?php echo $mostrar['email'] ?></td>
					<td><?php echo $mostrar['password'] ?></td>
					<td><?php echo $mostrar['privilegio'] ?></td>
					<td><?php echo $mostrar['fecha_registro'] ?></td>
				</tr>
			<?php 
			}
			 ?>
			</table>
	  		</p>
          </div>
      </div>
    </div>
  <div class="col-md-3">
  </div>
</div>

<?php include '../partials/footerA.php';?>