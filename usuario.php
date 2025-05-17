<?php 
session_start();
error_reporting(0);
include('php/conexion.php'); 
include('php/sin_proteccion.php'); 
$usuario = $_SESSION['usuario'];
?>

<?php require('./layout/header.php') ?>

<title>Perfil</title>
<h1>Sesion activa de : <?php echo $_SESSION['usuario']; ?></h1>

<?php require('./layout/footer.php') ?>