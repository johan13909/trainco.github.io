<?php include("conexion/conexion.php") ?>
<?php
$sql = "select * from estudiantes";
$ejecute = mysqli_query($cone,$sql);
$arreglo = mysqli_fetch_array($ejecute);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="IE=edge">
    <title>Adminitrador</title>
</head>
<body>
    <h1>Listado de estudiantes</h1>
    <hr>
    <center>
        <table border="1">
            <tbody>
                <tr>
                    <td>
                        <a href="agregarEstudiantes.php">
                            <button name="agregar" type="button">agregar </button>
                        </a>
                    </td> 
                    <td>buscar</td>
                    <td>
                        <input type="text" name="buscar" size="40" placeholder="Digite para buscar">
                    </td>
                    <td>
                        <button name="consulta" type ="submit">consultar</button>
                    </td>
                    <td>
                        <button name="lista" type="button">listar</button>
                    </td>
                    <td>
                        <button name="salir" type="button">salir</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table border="1" style="width:80%">
            <thead>
                <tr>
                    <td>Identificacion</td>
                    <td>Nombre</td>
                </tr>
            </thead>
            <?php
            if($arreglo>0){
                do{
            ?>
            <tbody>
                        <tr>
                            <td><?php echo $arreglo[0] ?></td>
                            <td><?php echo $arreglo[1] ?></td>
                        </tr>
            </tbody>
            <?php
                }while($arreglo = mysqli_fetch_array($ejecute));
            }else {
                echo"No existe registro";
            }
            ?>
            </table>

        </center>
                
            
        </hr>

                    
    </hr>
</body>