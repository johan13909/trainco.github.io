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
  <body>
    <div class="contenedor">
      <header>
        <h1>
          <a href="index.html"
            ><img class="alineado" src="imagenes/logo.png" align="left"
          /></a>
          TRAIN - CO
          <h5>¡EASY TRAINING FOUR YOU!</h5>
        </h1>
      </header>
      <center>
        <div class="contenedor_4">
          <br />
          <br />
          <hr />
          <br />
          <br />
          <h2>GRACIAS POR REGISTRARSE</h2>
          <img class="alineado_1" src="imagenes/logo.png" />
          <hr />
          <br />
          <font size="6">
            Hola <?php $nombres2 = $_GET['nombres']; echo $nombres2 ?> tu registro fue satisfactorio,
            <p>ya puedes disfrutar de nuestros servicios.</p>
          </font>
          <br />
          <form action="index.html">
            <input
              class="boton"
              type="submit"
              name="Continuar"
              value="Continuar"
            />
          </form>
        </div>
      </center>
    </div>
  </body>
</html>
