<?php

include("conexion/conexion.php");
error_reporting(0);

$correo=$_POST['email'];
$pass=$_POST['password'];
session_start();
$_SESSION['email']=$correo;

$consulta="SELECT*FROM usuarios where email='$correo' and Contraseña='$pass'";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['Id_rol']==1){
    header("location:Menus_internos/index.php");
}
else{
    if($filas['Id_rol']==2){
        header("location:servicios_categorias.php");
    }
    else{
        if($filas['Id_rol']==3){
            header("location:Menus_internos/index_entrenador.php");
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

