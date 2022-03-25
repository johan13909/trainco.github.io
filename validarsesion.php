<?php

include("conexion/conexion.php");

$correo=$_POST['email'];
$pass=$_POST['password'];

$consulta="SELECT*FROM usuarios where email='$correo' and password='$pass'";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");
}
else{
    include("index.html");
    ?>
    <h1>Error en la autentificacion</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($con);
?>