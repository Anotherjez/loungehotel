<?php
include('header.php');
include('./libs/utils.php');

if($_POST){

  foreach($_POST as &$value){
      $value = addslashes($value);
  }        
  
  extract($_POST);

  $sql = "insert into huespedes(nombre, apellido, direccion, cedula, telefono, correo, llegada, salida, tipo) values('{$nombre}','{$apellido}','{$direccion}','{$cedula}','{$telefono}','{$correo}','{$llegada}','{$salida}','{$tipo}')";
  Connection::execute($sql);
  header("Location:index.php");


}

?>

        <!-- header end -->
        <!-- content -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
              <?php GetForm(); ?>
              <div class="kwicks-wrapper marg_bot1">
                <ul class="kwicks horizontal">
                  <li><img src="images/img1.jpg" alt=""></li>
                  <li><img src="images/img2.jpg" alt=""></li>
                  <li><img src="images/img3.jpg" alt=""></li>
                  <li><img src="images/img4.jpg" alt=""></li>
                </ul>
              </div>
            </div>
            <div class="pad">
              <div class="line1">
                <div class="wrapper line2">
                  <div class="col1">
                    <h2><img src="images/title_marker1.jpg" alt="">Mejores Tarifas</h2>
                    <p class="pad_bot1">IberoStar es un hotel lujoso y versátil que, gracias a su estratégica ubicación en Punta Cana y servicios como Wi-Fi gratuito, es ideal para viajes en familia, en pareja o para visitas y reuniones de negocios. </p>
                    
                  <div class="col1 pad_left1">
                    <h2><img src="images/title_marker2.jpg" alt="">Hotel Guide</h2>
                    <p class="pad_bot1">La capital de la República Dominicana es una ciudad estimulante y multicultural y, por eso, IberoStar es un punto de partida ideal para disfrutar de la zona turistica mas bella que tiene el Pais.</p>
                    
                  <div class="col1 pad_left1">
                    <h2><img src="images/title_marker3.jpg" alt="">Amenidades</h2>
                    <p class="pad_bot1">Disfrute de esta espectacular piscina de borde infinito ubicada en el tercer nivel del hotel, junto al BLU Bar, el SPA y el gimnasio. ¡Deleitese con los atardeceres mas hermosos y sumerjase en el mejor area para relajarse del hotel!</p>
                    
                </div>
              </div>
            </div>
          </div>
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>Bienvenido a nuestro Hotel! </h2>
                <h3>Welcome to Our Hotel! </h3>
                <p class="pad_bot1"><strong class="color2">¿Sabías que el color turquesa del mar Caribe es único en el mundo y es resultado de su limpieza, su profundidad y ciertas leyes de la física que solo se dan allí?
                Puedes comprobarlo en Iberostar Selection Bávaro alojándote en un hotel 5 estrellas ubicado al pie de los 15 Km de arena blanca de Playa Bávaro. </p>
                <p class="pad_bot2"> Habitaciones preparadas para toda la familia en un resort único, concebido como un pueblo caribeño entre vegetación tropical. </p>

              
          </div>
        </article>
        <!--content end-->
      </div>
    </div>
  </div>
</div>
<div class="main">
  <!-- footer -->
  <footer>
    <div class="col2">Copyright &copy; <a href="#">Laura Ulerio</a> Todos los derechos reservados  <a target="_blank" href="http://www.templatemonster.com/"></a>
      <nav>
        <ul id="footer_menu">
          <li class="active"><a href="index.html">Nosotros</a></li>
            <li><a href="services.html">Servicios</a></li>
            <li><a href="booking.html">Reserva</a></li>
            <li><a href="rooms.html">Rooms</a></li>
            <li><a href="locations.html">Locacion</a></li>

        </ul>
      </nav>
    </div>
    <div class="col1 pad_left1">
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
      </ul>
    </div>
    <!-- {%FOOTER_LINK} -->
  </footer>
  <!-- footer end -->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(document).ready(function () {
    $('.kwicks').kwicks({
        max: 500,
        spacing: 0,
        event: 'mouseover'
    });
})
</script>
</body>
</html>