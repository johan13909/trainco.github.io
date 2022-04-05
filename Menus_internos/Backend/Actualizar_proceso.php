<?php
session_start();
#error_reporting(0);
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion=''){
  header("location:../login.html");
  die();
}

date_default_timezone_set("America/Bogota");
include('../../conexion/conexion.php');

$id = $_POST['id'];
$usua = $_POST['usuario'];
$nom = $_POST['nombres'];
$ape = $_POST['apellidos'];
$cell = $_POST['celular'];
$email = $_POST['correo'];
$hoy=date('y-m-d');
$roles = $_POST['roles'];

$senten = "UPDATE usuarios 
SET Nom_usuario = '$usua',
Nombres = '$nom',
Apellidos = '$ape',
Celular = '$cell',
Email = '$email',
Fec_regis = '$hoy',
Id_rol = '$roles'
WHERE Id_User = '$id';";

$senten_result = mysqli_query($con,$senten) or die ("error en la conexion");

if ($senten_result == TRUE){
    header("location:../administrar_usuarios.php");
}
else{
    header("location:test.php");
}

?>