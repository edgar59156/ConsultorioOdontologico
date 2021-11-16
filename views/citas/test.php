
<div style="height: auto;" class="">
<h1 style="margin-left:20px;">Agendar cita</h3>

<div>

<form action="/ConsultorioOdontologico/panel/citas/cita.php?action=add" method="POST" enctype="multipart/form-data">

<div style="margin-left:50px;margin-top:60px" class="row">
<label>Nombre completo del paciente</label>
    <input style="margin-left:150px;width:750px"type="text" name="nombre" value="" class="form-control"  placeholder="Ingresar" style="">  
  </div>

  <div style="margin-left:50px;margin-top:60px" class="row">
  <label for="floatingInput">Descripcion de la cita</label>
    <input style="margin-left:310px;width:750px" type="text" name="descripcion" value="" class="form-control" placeholder="Ingresar" style=" ">
    
  </div>

  <div style="margin-left:50px;margin-top:60px" class="row">
  <label for="floatingInput">Fecha de la cita</label>
    <input style="margin-left:350px;width:250px" type="date" name="fecha" value="" class="form-control"  placeholder="Fecha Cita" style="">
   
  </div>

  <div style="margin-left:50px;margin-top:60px" class="row">
  <label for="floatingInput">Hora de la cita</label>
    <input style="margin-left:355px;width:755px" type="time" name="hora" value="" class="form-control" placeholder="Ingresar" style="">
    
  </div>

  <input type="hidden" name="accion" value="add" class="form-control">
  <input type="hidden" name="id_paciente" value="1" class="form-control">
  <input type="hidden" name="id_odontologo" value="1" class="form-control">
  
  <div style="margin-left:1130px;margin-top:76px" class="form-group">
    <input style="color: white;background:black;width:130px;height:40px;border-color:black" type="submit" name="enviar" value="Agendar cita" class="btn btn-success" />
  </div>

</form>
    
</div>

</div>


</body>
</html>






