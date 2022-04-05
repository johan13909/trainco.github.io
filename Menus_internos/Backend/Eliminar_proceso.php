<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion=''){
  header("location:../login.html");
  die();
}

include("obtener_nombre.php");
include("../../conexion/conexion.php");

if (!isset($_GET['id'])){
    header("location:404.html");
}

$id_user = $_GET['id'];

$delete = "DELETE FROM usuarios where Id_user = '$id_user'";
$result = mysqli_query($con,$delete);

if ($result === TRUE){
    header("location:../administrar_usuarios.php");
}
else{
    header("location:test.php");
}

?>