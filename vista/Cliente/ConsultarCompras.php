<!DOCTYPE html>
<html lang="es">
<head>
  <title>Consultar Compra</title>

<?php include '../partials/headC.php';?>

<?php include '../partials/menuC.php';?>

<?php 

  $conexion=mysqli_connect('localhost','david','qwerty12','hsd_plus');

 ?>

<br></br>

<div class="row">
  <div class="col-md-1">
  </div>
    <div class="col-md-10">

      <div class="card mb-3">
          <div class="table-responsive">
            <center>
              <h2>Consultar Compras</h2>
            </center>
              <p>
                <table class="table table-bordered" id="dataTable" width="100%">

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
    </div>
  <div class="col-md-3">
  </div>
</div>

<?php include '../partials/footerC.php';?>
  