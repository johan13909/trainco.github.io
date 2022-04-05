<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion=''){
  header("location:../login.html");
  die();
}

include("obtener_nombre.php");
include("../conexion/conexion.php");

if (!isset($_GET['id'])){
    header("location:404.html");
}

$id_user = $_GET['id'];

$update = "SELECT * FROM usuarios a 
INNER JOIN rol_usuarios B ON A.Id_rol = B.Id_rol
where a.Id_User = '$id_user';";
$objet = mysqli_query($con,$update);

while($rows=mysqli_fetch_array($objet)) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>TRAIN-CO</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $nombre; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Configuracion</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="administrar_usuarios.php" class="dropdown-item">Administrar datos</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $correo; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="../cerrar_sesion.php" class="dropdown-item">Cerrar sesion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <br>

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="">
                    <div class="">
                            <div class="bg-light rounded h-100 p-4">
                                <h6 class="mb-4">Actualizar usuarios</h6>
                                    <form method="POST" action="backend/Actualizar_proceso.php">
                                        <div class="form-floating mb-3">
                                            <input type="hidden" value="<?php echo $rows['Id_User'] ?>" name="id">
                                            <input type="text" class="form-control" id="floatingInput" 
                                            value="<?php echo $rows['Nom_usuario'] ?>" name="usuario">
                                            <label for="floatingInput">Usuario</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" 
                                            value="<?php echo $rows['Nombres'] ?>" name="nombres">
                                            <label for="floatingInput">Nombres</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" 
                                            value="<?php echo $rows['Apellidos'] ?>" name="apellidos">
                                            <label for="floatingInput">Apellidos</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" 
                                            value="<?php echo $rows['Celular'] ?>" name="celular">
                                            <label for="floatingInput">Celular</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" 
                                            value="<?php echo $rows['Email'] ?>" name="correo">
                                            <label for="floatingInput">Correo</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select name="roles" class="form-select" id="floatingSelect" 
                                            aria-label="Floating label select example">
                                                <option selected></option>
                                                <?php
                                                    $List = mysqli_query($con,"SELECT Id_rol,Rol FROM rol_usuarios");
                                                    while($options = $List->fetch_assoc()):
                                                        $id_rol = $options['Id_rol'];
                                                        $name = $options['Rol'];
                                                        echo "<option value='$id_rol'>$name</option>";
                                                    endwhile;
                                                ?>
                                            </select>
                                            <label for="floatingSelect">Rol: <?php echo $rows['Rol'] ?></label>
                                        </div>
                                        <div class="form-floating">
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </div>
                                    </form>
                                    <?php } ?>
                            </div>
                        </div>
                </div>
            </div>
            <!-- Recent Sales End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>