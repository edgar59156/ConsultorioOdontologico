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
<div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>
                        <small>REGISTRAR PACIENTE</small>
                    </h1>
                </div>
                <form role="form">

                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInput" required placeholder="Nombre">
                    </div>

                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInput" required placeholder="Apellido paterno">
                    </div>

                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInput" required placeholder="Apellido materno">
                    </div>
                    <div class="form-group">

                        <label for="exampleInput">
							Fecha de nacimiento
					</label>
                        <input type="date" class="form-control" id="exampleInput">
                    </div>

                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInput" required placeholder="Domicilio">
                    </div>

                    <div class="form-group">


                        <input type="email" class="form-control" id="exampleInputEmail1" required placeholder="Correo">
                    </div>

                    <div class="form-group">

                        <label for="exampleInputFile">
							Fotografía
					</label>
                        <input type="file" class="form-control-file" id="exampleInputFile">
                        <p class="help-block">

                        </p>
                    </div>

                    <button type="submit" class="btn btn-primary">
					Guardar
				</button>
                </form>
            </div>
        </div>
</div>
