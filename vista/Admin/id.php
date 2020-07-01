<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tipo de documentos</title>

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
				<td>id_tdocumento</td>
				<td>abrebiatura</td>
				<td>nombre</td>
			</tr>

			<?php 
			$sql="SELECT * from tipodocumentos";
			$result=mysqli_query($conexion,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<tr>
				<td><?php echo $mostrar['id_tdocumento'] ?></td>
				<td><?php echo $mostrar['abrebiatura'] ?></td>
				<td><?php echo $mostrar['nombre'] ?></td>
			</tr>
		<?php 
		}
		 ?>
		</table>
    </p>
    </div>
</div>

<?php include '../partials/footerA.php';?>