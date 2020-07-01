<!DOCTYPE html>
<html lang="es">
<head>
    <title>Reservas</title>

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
				<td>id_reserva</td>
				<td>fecha_reserva</td>
				<td>cantidad</td>
				<td>precio_total</td>
				<td>estado</td>
				<td>observaciones</td>
				<td>cliente</td>
			</tr>

			<?php 
			$sql="SELECT * from reservas";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<tr>
				<td><?php echo $mostrar['id_reserva'] ?></td>
				<td><?php echo $mostrar['fecha_reserva'] ?></td>
				<td><?php echo $mostrar['cantidad'] ?></td>
				<td><?php echo $mostrar['precio_total'] ?></td>
				<td><?php echo $mostrar['estado'] ?></td>
				<td><?php echo $mostrar['observaciones'] ?></td>
				<td><?php echo $mostrar['cliente'] ?></td>
			</tr>
		<?php 
		}
		 ?>
		</table>
    </p>
    </div>
</div>

<?php include '../partials/footerA.php';?>