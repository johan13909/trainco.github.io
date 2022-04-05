<?php
date_default_timezone_set("America/Bogota");
include("conexion/conexion.php");

$usuario=$_GET['usuario'];
$nombres=$_GET['nombres'];
$apellidos=$_GET['apellidos'];
$celular=$_GET['celular'];
$correo=$_GET['correo'];
$pass=$_GET['contraseña'];
$hoy=date('y-m-d');
$rol = 2; #Rol cliente

$registro="INSERT INTO usuarios (nom_usuario,nombres,apellidos,celular,email,contraseña,fec_regis,Id_rol) 
values ('$usuario','$nombres','$apellidos','$celular','$correo','$pass','$hoy','$rol')";
$resultado=mysqli_query($con, $registro);


if($resultado == true){
    header("location:12_gracias_por_registrarte_user.php?nombres=" . $_GET['nombres']);
}
else{
    include("registrate_client.html");
    ?>
    <h1 align="center">Error al registrase</h1>
    <?php
}

mysqli_close($con);
?>
