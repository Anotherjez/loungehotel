<?php

include('libs/configx.php');
include('libs/connection.php');


function GetForm(){
    echo<<<FORM
    <form method="POST" id="form1">
    <h2>Registre su Habitacion:</h2>
    <fieldset>
      <div class="row">
        <input type="text" class="input" id="nombre" name="nombre">
        Nombre: </div>
        <div class="row">
        <input type="text" class="input" id="apellido" name="apellido">
        Apellido: </div>
      <div class="row">
      E-Mail:
        <input type="email" class="input" id="email" name="email">
        </div>
        <div class="row">
        <input type="text" class="input" id="cedula" name="cedula">
        Cedula: </div>
      <div class="row">
      Telefono: 
        <input type="number" class="input" id="telefono" name="telefono">
        </div>
      <div class="row">
      Fecha de llegada: 
        <input type="date" class="input" id="llegada" name="llegada">
        </div>
      <div class="row">
      Fecha de salida:
        <input type="date" class="input" id="salida" name="salida">
         </div>   
         <div class="row">
      Tipo de Habitacion:
        <input type="text" class="input" id="tipo" name="tipo">
         </div>  
    <div class="wrapper"> <button type="submit" class="button1">Enviar</button></div>  
    </fieldset>
    </form>
    FORM;
}
?>