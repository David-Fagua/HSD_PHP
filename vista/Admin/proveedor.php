<!DOCTYPE html>
<html lang="es">
<head>
    <title>Proveedores</title>

<?php include '../partials/headA.php';?>

<?php include '../partials/menuA.php';?>

<?php 

	$conexion=mysqli_connect('localhost','david','qwerty12','hsd_plus');

 ?>

</br>
</br>

<br></br>

<div id="body">
    <div id="texto">
        <!--Cuerpo-->
        <p id="texto-contenedor-1">
        	<table border="1" >
			<tr>
				<td>id_proveedor</td>
				<td>nit</td>
				<td>razon social</td>
				<td>telefono</td>
				<td>email</td>
				<td>direccion</td>
				<td>ciudad</td>
			</tr>

			<?php 
			$sql="SELECT * from proveedores";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<tr>
				<td><?php echo $mostrar['id_proveedor'] ?></td>
				<td><?php echo $mostrar['nit'] ?></td>
				<td><?php echo $mostrar['razon_social'] ?></td>
				<td><?php echo $mostrar['telefono'] ?></td>
				<td><?php echo $mostrar['email'] ?></td>
				<td><?php echo $mostrar['direccion'] ?></td>
				<td><?php echo $mostrar['ciudad'] ?></td>
			</tr>
		<?php 
		}
		 ?>
		</table>
    </p>
    </div>
</div>

<?php include '../partials/footerA.php';?>