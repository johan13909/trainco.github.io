<!DOCTYPE html>
<html lang="es">
  <?php 
    include("Conexion/Conexion.php");
  ?>
  <head>
    <meta charset="utf-8" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"
    />
  </head>

  <body class="fondo">
    <div class="contenedor">
      <div class="contenedor_1" align="left">
        <h1>
          <a href="index.html">
            <img class="alineado" src="imagenes/logo.png" align="left" />
          </a>
          TRAIN - CO
          <h5>¡EASY TRAINING FOUR YOU!</h5>
        </h1>
      </div>

      <div class="contenedor_2" align="right">
        <ul class="nav">
          <li id="li">
            <a class="a1" href="index.html"><b>Inicio</b></a>
          </li>
          <li id="li">
            <a class="a1" href="servicios_categorias.html"
              ><b>Nuestros Servicios</b></a
            >
          </li>
          <li id="li">
            <a class="a1" href="conocenos.html"><b>Conócenos</b></a>
          </li>
          <li id="li">
            <a class="a1" href="#"><b>Contáctanos</b></a>
          </li>
          <li id="li">
            <a class="a1" href="login_train.html"
              ><b>Ingresar como Entrenador</b></a
            >
          </li>
        </ul>
      </div>
    </div>
    <form class="form_1">
      <h2 class="title_1">Registrate</h2>
      <div class="contenedor_11">
        <input
          class="input_form"
          type="text"
          placeholder="Nombre Completo"
          required
        />
        <input class="input_form" type="text" placeholder="Email" required />
        <input
          class="input_form"
          type="password"
          placeholder="Contraseña"
          required
        />
        <input type="submit" value="Registrate" class="boton_6" />
        <hr />
        <br />
        <center>
          <p>
            ¿Ya tienes una cuenta?
            <a class="link" href="login_client.html">Iniciar Sesion</a>
          </p>
        </center>
      </div>
    </form>
  </body>
</html>
