<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equiparentmvc</title>
    <meta name="description" content="Coparentalidad Digital">
    <link rel="stylesheet" href="/public/build/css/app.css">  
    <script src="/public/build/js/bundle.min.js"></script>
</head>
<body>

<header class="header <?php echo isset($inicio) ? 'inicio' : ''; ?>">
  <div class="contenedor contenido-header">
      <div class="logo">        
        <a class="logo" href="/public/index.php"><h1>EquiParent.App</h1></a>
      </div><!-- .logo -->
      
      <div class="mobile-menu">
        <img src="/public/build/img/barras.svg" alt="icono menu responsive">
      </div>

      <div class="alinear-derecha">
          <img class="dark-mode-boton" src="/public/build/img/dark-mode.svg" alt="icono dark-mode">
              <nav class="navegacion">
                  <a href="nosotros.php">Nosotros</a>
                    <a href="servicios.php">Servicios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
             </nav>
        </div>
    </div>
</header>

<main class="iframe">
        <span id="calendarTitle">Equiparent Calendar</span>   
    
        <!-- <iframe src="https://calendar.google.com/calendar/embed?height=736&wkst=2&ctz=America%2FSantiago&bgcolor=%23B39DDB&showCalendars=0&showPrint=0&title=Equiparent%20Calendar&src=Y19lMWMxMjE1OTU2NWM1ZjJjMWRmODg3ODc3YmUwOWY2M2NjODY2ODk5ZDFjMDg4MDYxN2I2NzRhZTVjNzg4ZGM3QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%233F51B5" style="border:solid 1px #777" width="90%" height="100%" frameborder="0" scrolling="no"></iframe> -->
         
  <iframe src="https://calendar.google.com/calendar/embed?height=736&amp;wkst=2&amp;ctz=America%2FSantiago&amp;bgcolor=%23B39DDB&amp;showCalendars=0&amp;showPrint=0&amp;showTitle=0&amp;src=Y19lMWMxMjE1OTU2NWM1ZjJjMWRmODg3ODc3YmUwOWY2M2NjODY2ODk5ZDFjMDg4MDYxN2I2NzRhZTVjNzg4ZGM3QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%233F51B5" style="border:solid 1px #777" width="95%" height="100%" frameborder="0" scrolling="no"></iframe>
</main>


<footer class="footer seccion">
        <div class="contenedor contenido-footer">
            <nav class="navegacion">
                  <a href="nosotros.php">Nosotros</a>
                    <a href="servicios.php">Servicios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
             </nav>
        </div>
    <p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?> &copy;</p>
</footer>

</body>
</html>