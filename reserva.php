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
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>Sobre la reservacion</h2>
                <p class="pad_bot1"><strong class="color2">¡EXCLUSIVO EN WEB OFICIAL! HASTA 50% DE DESCUENTO Y 2 NIÑOS GRATIS!</strong> </p>
                <p>No dejes escapar esta oferta exclusiva y ahorra hasta un 50% en estancias hasta Abril 2021! Además, 2 niños se alojan gratis</p>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page3_img3.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color2">PRECIO ESPECIAL SOLO ALOJAMIENTO (SERVICIO DE COMIDAS EXCLUIDO)</strong></p>
                  <p class="pad_bot2"> Reserva ahora tu esperada escapada en tarifa flexible. Nos hemos asegurado de seguir todas las recomendaciones de higiene y salud para que disfrutes de una estancia segura.</p>
                </div>
                <div class="pad_bot2">
                  <div class="wrapper line2">
                    <div class="col1">
                      
                    </div>
                  </div>
                </div>
                <a href="#" class="button1">Leer mas..</a> </div>
              <div class="col1 pad_left1">
                <h2>Info</h2>
                <p class="pad_bot1"><strong class="color2">PRECIO ESPECIAL SOLO ALOJAMIENTO</strong></p>
                <p class="pad_bot1"> Reserva ahora tu esperada escapada en tarifa flexible. Nos hemos asegurado de seguir todas las recomendaciones de higiene y salud para que disfrutes de una estancia segura.</p>
               
                <a href="#" class="button1">Leer mas..</a> </div>
            </div>
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