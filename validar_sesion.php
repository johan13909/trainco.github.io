<?php

include("conexion/conexion.php");

$correo=$_POST['email'];
$pass=$_POST['password'];
session_start();
$_SESSION['email']=$correo;

$consulta="SELECT*FROM usuarios where email='$correo' and Contraseña='$pass'";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['Id_rol']==1){
    header("location:administrador.php");
}
else{
    if($filas['Id_rol']==2){
        header("location:cliente.html");
    }
    else{
        if($filas['Id_rol']==3){
            header("location:entrenador.html");
        }
        else{
            include("login.html");
            ?>
            <h1 align="center">Error en la autentificacion</h1>
            <?php
        }
    }
}



mysqli_free_result($resultado);
mysqli_close($con);
?>

