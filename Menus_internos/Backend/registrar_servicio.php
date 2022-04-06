<?php
session_start();
#error_reporting(0);
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion=''){
  header("location:../login.html");
  die();
}

date_default_timezone_set("America/Bogota");
include("../../conexion/conexion.php");

$correo = $_SESSION['email'];
$sql="SELECT Id_User FROM usuarios where email='$correo';";
$resultado=mysqli_query($con, $sql) or die ('Error en el query database'); 

$filas=mysqli_fetch_assoc($resultado);

foreach($filas as $id_cliente){
  $update = "INSERT INTO servicios(Id_user_cliente,fec_registro,fecregis_entrenador,Activo) 
  VALUES ('$id_cliente',null,null,1);";
}

$result=mysqli_query($con, $update) or die ('Error en el query database');


echo '<script languaje="javascript">
  alert("Solicitud Enviada correctamente, por favor espere a que el entrenador se comunique con usted");
  window.location="../../servicios.php"</script>';

?>