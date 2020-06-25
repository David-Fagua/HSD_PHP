<!DOCTYPE html>
<html lang="es">
<head>
    <title>Usuarios</title>

<?php include '../partials/headA.php';?>

<?php include '../partials/menuA.php';?>

<?php 

	$conexion=mysqli_connect('localhost','root','','hsd_plus');

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
				<td>id</td>
				<td>nombre</td>
				<td>usuario</td>
				<td>email</td>
				<td>password</td>
				<td>privilegio</td>	
			</tr>

			<?php 
			$sql="SELECT * from t_usuarios";
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
			</tr>
		<?php 
		}
		 ?>
		</table>
    </p>
    </div>
</div>

<?php include '../partials/footerA.php';?>