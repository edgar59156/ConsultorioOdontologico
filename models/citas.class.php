
<!-- Modelo -->
<!-- contiene las funciones con los querys -->

<?php
require_once('sistema.class.php');

class Cita extends Sistema
{  

    public function create($datos)
    {
        $this->connect();
  
            $sql = "INSERT into cita (descripcion,fecha,hora,id_paciente,id_odontologo) 
           values (:descripcion,:fecha,:hora,:id_paciente,1) ";
            // print($sql);
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha', $datos['fecha'], PDO::PARAM_STR);
        $stmt->bindParam(':id_paciente', $datos['id_paciente'], PDO::PARAM_INT);
        $stmt->bindParam(':hora', $datos['hora'], PDO::PARAM_STR);
        $rs = $stmt->execute();
        return $rs;
    }

    
}

$Cita = new Cita;

