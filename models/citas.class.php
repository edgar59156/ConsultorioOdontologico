
<!-- Modelo -->
<!-- contiene las funciones con los querys -->

<?php
require_once('sistema.class.php');

class Cita extends Sistema
{  

    public function create($datos)
    {
        $this->connect();
  
            $sql = 'INSERT into cita (descripcion,fecha,hora,id_paciente,id_odontologo) 
            values ('.'"'.$_POST["descripcion"].'"'.','.'"'.$_POST["fecha"].'"'.','.'"'.$_POST["hora"].'"'.',1,1)';
            // print($sql);
        $stmt = $this->con->prepare($sql);

        $rs = $stmt->execute();
        return $rs;
    }

    
}

$Cita = new Cita;

