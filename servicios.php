
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
              <div class="col2 pad">
                <h2><img src="images/title_marker1.jpg" alt="">Servicios</h2>
                <div class="wrapper pad_bot2">
                  <figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color3">Variedad de salas para reuniones</strong><br>
                    Realice eventos y conferencias en cualquiera de los nueve salones de reuniones de este hotel de lujo. Cada salón está totalmente equipado con equipo audiovisual y ofrece con una capacidad máxima de 500 personas. Ofrecemos servicio de catering y delivery</p>
                  <a href="#" class="color1">Read More</a> </div>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page2_img2.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color3">Atencion al cliente</strong><br>
                    Express check-in. Guarda equipaje. Express check-out. Seguridad 24h. Conserjería / Recepción 24 horas. Ventiladores de techo. Servicios médicos $. Servicio de lavandería $. Mozo de equipajes</p>
                  <a href="#" class="color1">Read More</a> </div>
              </div>
            </div>
          </div>
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>Principales Servicios</h2>
                <p class="pad_bot1"><strong class="color2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</strong> </p>
                <p class="pad_bot1"> Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enigm ipsam voluptatem nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <div class="wrapper pad_bot2">
                  <div class="col1">
                    
                  </div>
                </div>
                <a href="#" class="button1">Read More</a> </div>
              <div class="col1 pad_left1">
                <h2>Ofertas</h2>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page2_img3.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color2">Suit Presidencial</strong></p>
                  <p class="pad_bot1">Reserva ahora tu esperada escapada en tarifa flexible. Nos hemos asegurado de seguir todas las recomendaciones de higiene y salud para que disfrutes de una estancia segura.</p>
                </div>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page2_img4.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color2">Habitacion Doble</strong></p>
                  <p class="pad_bot2">¡EXCLUSIVO EN WEB OFICIAL! HASTA 50% DE DESCUENTO Y 2 NIÑOS GRATIS!</p>
                </div>
                <a href="#" class="button1">Read More</a> </div>
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