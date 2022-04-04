<?php

include("../conexion/conexion.php");

session_start();
error_reporting(0);
$correo = $_SESSION['email'];
$sql="SELECT Nombres FROM usuarios where email='$correo';";
$resultado=mysqli_query($con, $sql) or die ('Error en el query database'); 

$filas=mysqli_fetch_assoc($resultado);

foreach($filas as $nombre){
    echo $nombre;
}

?>