<!--Comentario-->
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
        <a class="nav-link" href="#">Prescribir receta</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
<form>
    <h1>GENERAR RECETA</h1>
    <h4 class="text-right"><b>Id_cita:</b> 00001</h4>
    <h4 class="text-right"><b>Fecha:</b> 01/01/2021</h4>
    <h4><b>Odontólogo:</b> Juan Perez Perez</h4>
    <h4><b>Paciente:</b> Luis Lopez Lopez</h4>
</br>   
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion de la cita</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tratamiento</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button style="float: right;" class="btn btn-primary btn-lg">Generar</button>
</form>
</div>