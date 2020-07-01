<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ciudades</title>

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
              <h2>Gestor de Catalogo</h2>
            </center>
              <p>
                <table class="table table-bordered" id="dataTable" width="100%">
				<tr>
					<td>id_ciudad</td>
					<td>nombre</td>
				</tr>

				<?php 
				$sql="SELECT * from ciudades";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				 ?>

				<tr>
					<td><?php echo $mostrar['id_ciudad'] ?></td>
					<td><?php echo $mostrar['nombre'] ?></td>
				</tr>
			<?php 
			}
			 ?>
			</table>
	    	</p>
          </div>
      </div>
    </div>
  <div class="col-md-1">
  </div>
</div>

<?php include '../partials/footerA.php';?>