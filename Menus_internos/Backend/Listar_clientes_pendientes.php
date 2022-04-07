<?php

include('../../conexion/conexion.php');
session_start();

if(!isset($_POST['buscar'])){
    $read = "SELECT * FROM usuarios A 
    INNER JOIN servicios C ON a.Id_User = c.Id_user_cliente
    WHERE c.Id_user_entrenador IS NULL
    ORDER BY c.fec_registro DESC;";
    $result = mysqli_query($con, $read);
}
else{

    $buscar = $_POST['buscar'];

    $read = "SELECT * FROM usuarios A 
    INNER JOIN servicios C ON a.Id_User = c.Id_user_cliente
    WHERE a.Nombres LIKE '%$buscar%'
    OR a.Apellidos LIKE '%$buscar%'
    OR a.Celular LIKE '%$buscar%'
    OR a.Email LIKE '%$buscar%'
    OR c.fec_registro LIKE '%$buscar%'
    OR c.Activo LIKE '%$buscar%'
    AND c.Id_user_entrenador IS NULL
    ORDER BY c.fec_registro DESC;";
    $result = mysqli_query($con, $read);

}

?>