<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion=''){
  header("location:Login.html");
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
              ><b>Cerrar Sesion</b></a
            >
          </li>
        </ul>
      </div>
    </div>

    <div>
      <img id="portada" src="imagenes/fondo1.png" />
      <div class="centrado_2">
        <div class="contenedor_12">
          <div class="contenedor_17">
            <div class="contenedor_18">
              <img class="img" src="imagenes/fondo8.png" alt="boxeo" />
              <p class="p_1"><b>Manny Pacquiao</b></p>
              <p class="p">Maestro profesional de Boxeo</p>
              <p class="p">
                Cuento con 3 años de experiencia trabajando como instructor de boxeo en una reconocida academia de la ciudad.
              </p>
                <form action="menus_internos/Backend/registrar_servicio.php">
                  <input class="boton_7" type="submit" value="Contratar">
                </form>
                
            </div>
          </div>
          <div class="contenedor_17">
            <div class="contenedor_18">
              <img class="img" src="imagenes/fondo9.png" alt="boxeo" />
              <p class="p_1"><b>Floyd Mayweather.</b></p>
              <p class="p">Profesional en preparacion y acondicionamiento fisico.</p>
              <p class="p">
                Calentamiento, salto de cuerda, boxear con saco de boxeo, hacer
                sparring, perfeccionar juego de pies, hacer combate real,
                estiramiento.
              </p>
                <input class="boton_7" type="submit" value="Contratar" />
            </div>
          </div>
          <div class="contenedor_17">
            <div class="contenedor_18">
              <img class="img" src="imagenes/fondo10.png" alt="entrenamiendo" />
              <p class="p_1"><b>Ezzard Charles</b></p>
              <p class="p">Profesor de Karate</p>
              <p class="p">
                Espalda(polea frontal al pecho) Brazos(curl con mancuernas
                sentado) Piernas(prensa de piernas) Pecho (cruces en polea)
                Hombro (face pull)
              </p>
                <input class="boton_7" type="submit" value="Contratar" />
            </div>
          </div>
          <div class="contenedor_17">
            <div class="contenedor_18">
              <img class="img" src="imagenes/fondo11.png" alt="entrenamiendo" />
              <p class="p_1"><b> Amanda Serrano</b></p>
              <p class="p">Especialidaza en defensa personal</p>
              <p class="p">
                Espalda(polea frontal al pecho) Brazos(curl con mancuernas
                sentado) Piernas(prensa de piernas) Pecho (cruces en polea)
                Hombro (face pull)
              </p>
                <input class="boton_7" type="submit" value="Contratar" />
            </div>
          </div>
        </div>
        <div class="pie_pag">
          <p>© 2020 Creado por Fitness Train-CO</p>
        </div>
      </div>
    </div>
  </body>
</html>
