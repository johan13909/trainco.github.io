<?php

include('../../conexion/conexion.php');
session_start();

if(!isset($_POST['buscar'])){
    $_POST['']= "";
    $buscar = $_POST['buscar'];
}

$buscar = $_POST['buscar'];

$read = "SELECT * FROM usuarios a 
INNER JOIN rol_usuarios B ON A.Id_rol = B.Id_rol
WHERE a.nom_usuario LIKE '%$buscar%'
OR a.Nombres LIKE '%$buscar%'
OR a.Apellidos LIKE '%$buscar%'
OR a.Celular LIKE '%$buscar%'
OR a.Email LIKE '%$buscar%'
OR a.Fec_regis LIKE '%$buscar%'
OR b.rol LIKE '%$buscar%'
ORDER BY 1 DESC;";
$result = mysqli_query($con, $read);

?>