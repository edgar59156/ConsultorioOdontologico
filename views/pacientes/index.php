

<body>
  <h1>Pacientes</h1>
  <!-- <a href="pacientes.php?action=create" class="btn btn-primary">Añadir Paciente</a> -->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
     
        <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($datos as $key => $paciente) :
      ?>
        <tr>
          <th scope="row"><?php echo $paciente['id_paciente'] ?></th>
         
          <td><?php echo $paciente['nombre'] ?></td>
          <td><?php echo $paciente['apaterno'] ?></td>
          <td><?php echo $paciente['amaterno'] ?></td>
          <td>
            <ul>
              <i class="btn btn-success bi bi-pencil"><a href="pacientes.php?action=agendar&id_paciente=<?php echo $paciente['id_paciente']; ?>" style="color: black;">Agendar cita</a></i>
              <i class="btn btn-primary bi bi-pencil"><a href="pacientes.php?action=prescribir&id_paciente=<?php echo $paciente['id_paciente'];?>" style="color: black;">Prescribir receta</a></i>
            </ul>
          </td>
        </tr>
      <?php
      endforeach
      ?>
    </tbody>
  </table>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
