<!DOCTYPE html>
<html lang="es">
<head>
<title>Usuarios</title>


<?php include '../partials/headA.php';?>

<?php include '../partials/menuA.php';?>

</br>
</br>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row featurette">
            <img src="../../assets/icon/1.png" width="50" height="50">
            <?php echo $_SESSION["usuario"]["nombre"]; ?>
            <a class="badge badge-info">
                <?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?>
            </a>
        </div>
    </div>
</div>

<?php include '../partials/footerA.php';?>