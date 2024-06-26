<?php require('conexion.php'); ?>

<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $statement = $conexion->prepare("SELECT * FROM cursos WHERE id = '$id'");
    $statement->execute();

    $result = $statement->fetch();


}else{
    header("Location: index.php");
}


?>






<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso de Diseño Gráfico</title>
    <link rel="stylesheet" href="producto.css" />
  </head>
  <body>
    <div id="particles-js" class="jejejejejejje">
      <header>
        <div class="pso">
          <nav class="navbar">
            <div class="logo"><img src="ilustrador.png"Nunito"></div>
            <ul class="nav-links">
              <li>
                <a href="">Cursos</a>
                <ul class="dropdown">
                  <li><a href="">Producto 1</a></li>
                  <li><a href="">Producto 2</a></li>
                  <li><a href="">Producto 3</a></li>
                </ul>
              </li>
              <li><a href="">Precios</a></li>
              <li>
                <a href="">Compañía</a>
                <ul class="dropdown">
                  <li><a href="">Acerca de</a></li>
                  <li><a href="">Equipo</a></li>
                  <li><a href="">Carreras</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Trabajos <span class="job-count">6</span></a>
              </li>
            </ul>
            <div class="auth-buttons">
              <a href="" class="login">Iniciar Sesión</a>
              <a href="" class="signup">Regístrate</a>
            </div>
          </nav>
        </div>
      </header>
      <div class="container">
        <div class="course-content">
          <p>Desarrollo > Desarrollo web > Diseño Gráfico</p>
          <h2>Diseño Gráfico: El Curso Completo, Práctico y Desde Cero!</h2>
          <p>
            El curso que te enseña a crear diseños gráficos profesionales desde
            cero.
          </p>
          <img
            src="https://th.bing.com/th/id/R.ae273901da0ee2887a279947ddaef1ab?rik=SJNtl45522QOOw&riu=http%3a%2f%2fwww.creati.edu.sv%2fwp-content%2fuploads%2f2015%2f12%2fdg-2.jpg&ehk=OgsXRTY0D2XLlAX8qOaRheMcDf650BbCi9%2b6vQQ6hJI%3d&risl=&pid=ImgRaw&r=0"
            alt="Curso de Diseño Gráfico"
            class="course-image"
          />
          <div class="rating">4.6 ★★★★☆ (12,060 calificaciones)</div>
          <div class="students">32,914 estudiantes</div>
          <div class="instructor">
            Creado por <a href="#" class="instructor">Carlos Arturo Esparza</a>
          </div>
          <div class="last-updated">Última actualización: 1/2024</div>
          <div class="features">
            <h3>Lo que aprenderás</h3>
            <ul>
              <li>Crear Diseños Gráficos Profesionales</li>
              <li>Uso Avanzado de Herramientas de Diseño</li>
              <li>Diseñar Logotipos y Marcas</li>
              <li>Crear Pósters y Folletos</li>
              <li>Edición Avanzada de Imágenes</li>
            </ul>
          </div>
        </div>
        <div class="sidebar">
          <div class="subscribe">
            <h2>Suscribirse a los mejores cursos</h2>
            <p class="price">74,900 COL$</p>
            <p class="old-price">449,900 COL$</p>
            <p class="discount">83% de descuento</p>
            <div class="trial">
              <button>Prueba gratis el Plan Personal</button>
              <p>A partir de 43,000 COL$ al mes tras la prueba</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="particulas.js"></script>
  </body>
</html>
