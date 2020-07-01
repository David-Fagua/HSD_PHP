<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ventas</title>

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
				<td>id_venta</td>
				<td>fecha_venta</td>
				<td>reserva</td>
				<td>observaciones</td>
				<td>cantidad</td>
				<td>presio_total</td>
				<td>responsable</td>
			</tr>

			<?php 
			$sql="SELECT * from registro_ventas";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<tr>
				<td><?php echo $mostrar['id_venta'] ?></td>
				<td><?php echo $mostrar['fecha_venta'] ?></td>
				<td><?php echo $mostrar['reserva'] ?></td>
				<td><?php echo $mostrar['observaciones'] ?></td>
				<td><?php echo $mostrar['cantidad'] ?></td>
				<td><?php echo $mostrar['presio_total'] ?></td>
				<td><?php echo $mostrar['responsable'] ?></td>
			</tr>
		<?php 
		}
		 ?>
		</table>
    </p>
    </div>
</div>

<?php include '../partials/footerA.php';?>