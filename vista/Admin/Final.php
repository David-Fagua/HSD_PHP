<!DOCTYPE html>
<html lang="es">
<head>
    <title>Producto Final</title>

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
				<td>id_producto</td>
				<td>articulo</td>
				<td>grosor</td>
				<td>fecha_promocion</td>
				<td>disponibilidad</td>
				<td>existencias</td>
				<td>responsable</td>
			</tr>

			<?php 
			$sql="SELECT * from producto_final";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<tr>
				<td><?php echo $mostrar['id_productof'] ?></td>
				<td><?php echo $mostrar['articulo'] ?></td>
				<td><?php echo $mostrar['grosor'] ?></td>
				<td><?php echo $mostrar['fecha_promocion'] ?></td>
				<td><?php echo $mostrar['disponibilidad'] ?></td>
				<td><?php echo $mostrar['existencias'] ?></td>
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