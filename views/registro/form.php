

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h2>
          REGISTRAR PACIENTE
        </h2>
        <?php if (isset($datos[0]['fotografia'])) : ?>
          <img src="archivos/<?php echo ($datos[0]['fotografia']); ?>" class="rounded-circle" width="200" height="200">
        <?php endif; ?>


      </div>
      <form method="POST" action="pacientes.php?action=<?php echo (isset($datos)) ? 'update' : 'save'; ?>" role="form">

        <div class="form-group">


          <input type="text" class="form-control" id="exampleInput" required placeholder="Nombre" name="paciente[nombre]" value="<?php echo (isset($datos[0]['nombre'])) ? $datos[0]['nombre'] : ''; ?>">
        </div>

        <div class="form-group">


          <input type="text" class="form-control" id="exampleInput" required placeholder="Apellido paterno" name="paciente[apaterno]" value="<?php echo (isset($datos[0]['apaterno'])) ? $datos[0]['apaterno'] : ''; ?>">
        </div>

        <div class="form-group">


          <input type="text" class="form-control" id="exampleInput" required placeholder="Apellido materno" name="paciente[amaterno]" value="<?php echo (isset($datos[0]['amaterno'])) ? $datos[0]['amaterno'] : ''; ?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nacimiento</label>
          <input type="text" name="paciente[nacimiento]" value="<?php echo (isset($datos[0]['nacimiento'])) ? $datos[0]['nacimiento'] : ''; ?>" class="form-control" id="nacimiento" placeholder="Nacimiento">

        </div>


        <div class="form-group">


          <input type="email" class="form-control" id="exampleInputEmail1" required placeholder="Correo" name="paciente[correo]" value="<?php echo (isset($datos[0]['correo'])) ? $datos[0]['correo'] : ''; ?>">
        </div>



        <div class="form-group">
          <input type="hidden" name="paciente[id_paciente]" value="<?php echo (isset($datos[0]['id_paciente'])) ? $datos[0]['id_paciente'] : ''; ?>" />
          <input type="submit" name="enviar" value="Guardar" class="btn btn-success" />
        </div>
      </form>
    </div>
  </div>
</div>