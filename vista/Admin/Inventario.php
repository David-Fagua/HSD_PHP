<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inventario General</title>

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
              <h2>Inventario General</h2>
            </center>
              <p>
                <table class="table table-bordered" id="dataTable" width="100%">

				<tr>
					<td>id_articulo</td>
					<td>nombre</td>
					<td>fecha_entrada</td>
					<td>preciode_compra</td>
					<td>disponibilidad</td>
					<td>peso_libra</td>
					<td>cantidad_unitaria</td>
					<td>color</td>
					<td>estado</td>
					<td>proveedor</td>
					<td>responsable</td>
				</tr>

				<?php 
				$sql="SELECT * from inventario_general";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				 ?>

				<tr>
					<td><?php echo $mostrar['id_articulo'] ?></td>
					<td><?php echo $mostrar['nombre'] ?></td>
					<td><?php echo $mostrar['fecha_entrada'] ?></td>
					<td><?php echo $mostrar['preciode_compra'] ?></td>
					<td><?php echo $mostrar['disponibilidad'] ?></td>
					<td><?php echo $mostrar['peso_libra'] ?></td>
					<td><?php echo $mostrar['cantidad_unitaria'] ?></td>
					<td><?php echo $mostrar['color'] ?></td>
					<td><?php echo $mostrar['estado'] ?></td>
					<td><?php echo $mostrar['proveedor'] ?></td>
					<td><?php echo $mostrar['responsable'] ?></td>
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