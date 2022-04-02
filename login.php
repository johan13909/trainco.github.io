
<!DOCTYPE html>
<html lang="es">
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
            <a class="a1" href="login.html"
              ><b>Iniciar Sesion</b></a
            >
          </li>
        </ul>
      </div>
    </div>
    <div class="form_1">
      <h2 class="title_1">Inicio De Sesion</h2>
      <div class="contenedor_11">
        <form action="validar_sesion.php" method="post">
          <input
            class="input_form"
            type="text"
            placeholder="Correo"
            name="email"
            required
            
          />
          <input
            class="input_form"
            type="password"
            placeholder="Contraseña"
            name="password"
            required
          />
          <input type="submit" value="Iniciar Sesion" class="boton_6" />
        </form>
        <hr />
        <br />
        <center>
          <p>
            ¿Olvidaste tu contraseña? <a class="link" href="#">Clic Aquí</a>
          </p>
        </center>
        <center>
          <p>
            ¿No tienes cuenta?
            <a class="link" href="registrate_client.html">Registrate</a>
          </p>
        </center>
      </div>
    </div>
  </body>
</html>
