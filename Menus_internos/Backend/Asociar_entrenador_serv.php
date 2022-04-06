<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion=''){
  header("location:../login.html");
  die();
}

date_default_timezone_set("America/Bogota");
include("../../conexion/conexion.php");

if (!isset($_GET['id'])){
    header("location:404.html");
}

$id_serv = $_GET['id'];
$hoy=date('y-m-d');
$correo = $_SESSION['email'];
$sql="SELECT Id_User FROM usuarios where email='$correo';";
$resultado=mysqli_query($con, $sql) or die ('Error en el query database'); 

$filas=mysqli_fetch_assoc($resultado);

foreach($filas as $id_entrenador){
    $update = "UPDATE SERVICIOS set Id_user_entrenador = '$id_entrenador', fecregis_entrenador='$hoy' where Id_servicio = '$id_serv' ";
  }

  $result=mysqli_query($con, $update) or die ('Error en el query database');


echo '<script languaje="javascript">
  alert("Servicio tomado con exito.");
  window.location="../solicitudes_pendientes.php"</script>';

?>