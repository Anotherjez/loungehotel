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
                <h2><img src="images/title_marker1.jpg" alt="">Contactanos</h2>
                <form id="ContactForm" action="#">
                  <div>
                    <div  class="wrapper">
                      <input type="text" class="input">
                      Nombre: </div>
                    <div  class="wrapper">
                      <input type="text" class="input">
                      Direccion: </div>
                    <div  class="wrapper">
                      <input type="text" class="input">
                      Email: </div>
                    <div  class="textarea_box">
                      <textarea name="textarea" cols="1" rows="1"></textarea>
                      Contacto: </div>
                    <a href="#" class="button2">Enviar</a> <a href="#" class="button2">Limpiar</a> </div>
                </form>
              </div>
            </div>
          </div>
          <div class="pad">
            <h2>Nuestros contactos</h2>
            <div class="line2">
              <div class="wrapper line3">
                <div class="col1">
                  <p class="pad_bot1"><strong class="color2">Santo Domingo</strong></p>
                  <p class="pad_bot1">Av 27 de Febrero 305, Santo Domingo</p>
                  <p class="cols"> Freephone:<br>
                    Telephone:<br>
                    Fax:<br>
                    Email:</p>
                  (809) 547-2343<br>
                  (809) 688-3600<br>
                  +1 800 889 9898<br>
                  <a href="#" class="color1">mail@demolink.org</a> </div>
                <div class="col1 pad_left1">
                  <p class="pad_bot1"><strong class="color2">La Romana</strong></p>
                  <p class="pad_bot1">16, La Romana 22000</p>
                  <p class="cols"> Freephone:<br>
                    Telephone:<br>
                    Fax:<br>
                    Email:</p>
                  (809) 547-2343<br>
                  (809) 688-3600<br>
                  +1 800 889 9898<br>
                  <a href="#" class="color1">mail@demolink.org</a> </div>
                <div class="col1 pad_left1">
                  <p class="pad_bot1"><strong class="color2">Punta Cana</strong></p>
                  <p class="pad_bot1">8901 Marmora Road, Glasgow, D04</p>
                  <p class="cols"> Freephone:<br>
                    Telephone:<br>
                    Fax:<br>
                    Email:</p>
                  (809) 547-2343<br>
                  (809) 688-3600<br>
                  +1 800 889 9898<br>
                  <a href="#" class="color1">mail@demolink.org</a> </div>
              </div>
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