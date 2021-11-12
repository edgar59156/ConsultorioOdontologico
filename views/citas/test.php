
<!DOCTYPE html>
<html>
<head>
  <title>Agendar cita</title>

  <style>
ul {
  list-style-type: none;
  height:60px;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
  border:black 1px solid
}

li {
    margin-top: 22px;
    margin-left: 30px;
  float: left;

}

li a {
  display: block;
  padding: 8px;
}
</style>

</head>
<body>

<div style="">
<ul>
  <li style=""><a style="color:black" href="#home">Registrar cita</a></li>
  <li><a style="color:black" href="#news">Registrar paciente</a></li>
  <li><a style="color:black" href="#contact">Preescribir receta</a></li>
</ul>

</div>

<div style="background:;height: auto;">
<h1 style="margin-left:20px;">Agendar cita</h3>

<div>

<form style="background:" action="pacientes.php?action=agendarcita" method="POST" enctype="multipart/form-data">

<div style="margin-left:50px;margin-top:40px" class="form-floating mb-3">
<label for="floatingInput">Nombre completo del paciente</label>
    <input style="margin-left:80px;width:800px"type="text" name="paciente[nombre]" value="" class="form-control"  placeholder="Ingresar" style=" width: 526px">
    
  </div>

  <div style="margin-left:50px;margin-top:70px" class="form-floating mb-3">
  <label for="floatingInput">Descripcion de la cita</label>
    <input style="margin-left:260px;width:800px" type="text" name="paciente[agendarcita]" value="" class="form-control" placeholder="Ingresar" style=" width: 526px">
    
  </div>

  <div style="margin-left:50px;margin-top:70px" class="form-floating mb-3">
  <label for="floatingInput">Fecha de la cita</label>
    <input style="margin-left:298px;width:" type="date" name="paciente[amaterno]" value="" class="form-control"  placeholder="Fecha Cita" style=" width: 526px">
   
  </div>

  <div style="margin-left:50px;margin-top:70px" class="form-floating mb-3">
  <label for="floatingInput">Hora de la cita</label>
    <input style="margin-left:305px;width:800px" type="text" name="paciente[nacimiento]" value="" class="form-control" placeholder="Ingresar" style=" width: 526px">
    
  </div>

  
  <div style="margin-left:1130px;margin-top:90px" class="form-group">
    <input style="color: white;background:black;width:130px;height:40px" type="submit" name="enviar" value="Guardar" class="btn btn-success" />
  </div>

</form>
    
</div>

</div>


</body>
</html>






