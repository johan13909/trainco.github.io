<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion=''){
  header("location:login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrador</title>
    </head>

    <body>
        <h1>Ingreso correctamente</h1>
        <br>
        <form action="cerrar_sesion.php">
        <input type="submit" value="Cerrar Sesion" class="boton_6" />
        </form>
    </body>


</html>