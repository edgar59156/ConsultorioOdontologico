<!-- 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>Consultorio Odontológico</title>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Registrar paciente <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Registrar cita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ConsultorioOdontologico/views/recetas/form.php">Escribir Receta</a>
      </li>
    </ul>
  </div>
</nav> -->

<div class="container-fluid">
<form method="POST" action="../recetas/receta.php?accion=<?php echo (isset($id_receta)) ? "update&id_receta=" . $id_receta : "add"; ?>" enctype='multipart/form-data' >
    <h1>GENERAR RECETA</h1>
    <h4 class="text-right"><b>Id_cita:</b><?php echo $datosCita['id_cita'] ?></h4>
    <h4 class="text-right"><b>Fecha:</b> <?php echo date("d-m-y"); ?></h4>
    <h4><b>Odontólogo:</b> <?php echo $datosOdontologo['nombre'] ?> <?php echo $datosOdontologo['apaterno'] ?> <?php echo $datosOdontologo['amaterno'] ?></h4>
    <h4><b>Paciente:</b> <?php echo $datosPaciente['nombre'] ?> <?php echo $datosPaciente['apaterno'] ?> </b> <?php echo $datosPaciente['amaterno'] ?></h4>
</br>   
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion de la cita</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $datosCita['descripcion'] ?></textarea>
   
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tratamiento</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tratamiento"></textarea>
  </div>
  <input  style="float: right;" class="btn btn-primary btn-lg" type="submit" name="Guardar" value="Guardar receta" href="/receta.php?accion=add&id_cita=<?php echo $dato['id_cita'];?>&id_paciente=<?php echo $dato['id_paciente'];?>">
</form>
</div>