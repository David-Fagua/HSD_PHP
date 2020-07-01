<!DOCTYPE html>
<html lang="es">
<head>
    <title>Producto en Proceso</title>

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
				<td>id_proceso</td>
				<td>fecha proceso</td>
				<td>estado</td>
				<td>articulo_inicial</td>
				<td>articulo_inicial2</td>
				<td>producto final</td>
				<td>responsable</td>
			</tr>

			<?php 
			$sql="SELECT * from producto_proceso";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<tr>
				<td><?php echo $mostrar['id_proceso'] ?></td>
				<td><?php echo $mostrar['fecha_proceso'] ?></td>
				<td><?php echo $mostrar['estado'] ?></td>
				<td><?php echo $mostrar['articulo_inicial'] ?></td>
				<td><?php echo $mostrar['articulo_inicial2'] ?></td>
				<td><?php echo $mostrar['producto_final'] ?></td>
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