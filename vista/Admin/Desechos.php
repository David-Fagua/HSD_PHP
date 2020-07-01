<!DOCTYPE html>
<html lang="es">
<head>
    <title>Desechos</title>

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
				<td>id_desecho</td>
				<td>articulo</td>
				<td>Fecha</td>
				<td>Cantidad</td>
				<td>Observaciones</td>
				<td>Responsable</td>
			</tr>

			<?php 
			$sql="SELECT * from desechos";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<tr>
				<td><?php echo $mostrar['id_desecho'] ?></td>
				<td><?php echo $mostrar['articulo'] ?></td>
				<td><?php echo $mostrar['fecha'] ?></td>
				<td><?php echo $mostrar['cantidad'] ?></td>
				<td><?php echo $mostrar['observaciones'] ?></td>
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