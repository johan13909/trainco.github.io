<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion=''){
  echo '<script languaje="javascript">
  alert("Para poder visualizar la informacion debe registrase o iniciar sesion.");
  window.location="login.html"</script>';
  die();
}
?>

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
            <a class="a1" href="servicios_categorias.php"
              ><b>Nuestros Servicios</b></a
            >
          </li>
          <li id="li">
          <a class="a1" href="cerrar_sesion.php"
              ><b>Cerrar Sesion</b></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="title_2">
      <p class="p"><b>Selecciona una Categoria</b></p>
    </div>

    <div class="contenedor_12">
      <div class="contenedor_13">
        <div class="contenedor_14">
          <img class="img" src="imagenes/fondo7.png" alt="boxeo" />
          <p class="p_1"><b>Boxeo</b></p>
          <p class="p">Descripcion (tipos de entrenamiento)</p>
          <p class="p">
            Calentamiento, salto de cuerda, boxear con saco de boxeo, hacer
            sparring, perfeccionar juego de pies, hacer combate real,
            estiramiento.
          </p>
          <form action="servicios.php">
            <input class="boton_7" type="submit" value="Explorar" />
          </form>
        </div>
      </div>
      <div class="contenedor_13">
        <div class="contenedor_14">
          <img class="img" src="imagenes/fondo3.png" alt="entrenamiendo" />
          <p class="p_1"><b>Entrenamiendo</b></p>
          <p class="p">Descripcion (tipos de entrenamiento)</p>
          <p class="p">
            Espalda(polea frontal al pecho) Brazos(curl con mancuernas sentado)
            Piernas(prensa de piernas) Pecho (cruces en polea) Hombro (face
            pull)
          </p>
          <form action="servicios.php">
            <input class="boton_7" type="submit" value="Explorar" />
          </form>
        </div>
      </div>
      <div class="contenedor_13">
        <div class="contenedor_14">
          <img class="img" src="imagenes/fondo6.png" alt=" ciclismo" />
          <p class="p_1"><b>Ciclismo</b></p>
          <p class="p">Descripcion (tipos de entrenamiento)</p>
          <p class="p">
            Calentamiento(15 Min), balanceo pesa rusa, PLANK(plancha abdominal),
            burpees, pesas en biceps, ejercicio de gemelos, finalizacion ruta(20
            Min)
          </p>
          <form action="servicios.php">
            <input class="boton_7" type="submit" value="Explorar" />
          </form>
        </div>
      </div>
    </div>

    <div class="contacto">
      <div class="contacto_1">
        <section class="section">
          <b id="title_contacto">Contacto</b><br /><br />
          <p>Colombia - Bogotá</p>
          <br /><br />
          <p>Carrera 69a # 24 sur - 74</p>
          <br /><br />
          <p>train-co@gmail.com</p>
          Tel. 031-745-06-08
          <p>(57) 302 231 1809</p>
        </section>
      </div>
      <div class="contacto_2">
        <form class="form" action="#">
          <center>
            <p class="p"><b>Envianos tus comentarios.</b></p>
          </center>
          <br />
          <input
            class="input_3"
            type="text"
            name="Nombre"
            placeholder="Nombre"
            required
          />
          <input
            class="input_3"
            type="text"
            name="Apellido"
            placeholder="Apellido"
            required
          /><br /><br />
          <input
            class="input_3"
            type="email"
            name="Email"
            placeholder="Email"
            required
          />
          <input
            class="input_3"
            type="text"
            name="Asunto"
            placeholder="Asunto"
            required
          /><br /><br />
          <textarea
            class="textarea"
            type="text"
            name="Asunto"
            placeholder="Escribe tu mensaje aqui..."
            required
            rows="20"
          ></textarea
          ><br />
          <input class="boton_5" type="submit" value="Enviar" />
        </form>
      </div>
    </div>
    <div class="pie_pag">
      <p>© 2020 Creado por Fitness Train-CO</p>
    </div>
  </body>
</html>
