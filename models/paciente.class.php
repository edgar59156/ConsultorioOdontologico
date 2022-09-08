<?php
    require_once('sistema.class.php');
    
    /*
     * Clase principal para pacientes
     */
    class Paciente extends Sistema{
        var $id_paciente;
        var $nombre;
        var $apaterno;
        var $amaterno;
        var $nacimiento;
        var $correo;
      //  var $domicilio;
        var $fotografia;


        function getIdPaciente(){ return $this -> id_paciente; }
        function getNombre(){ return $this -> nombre; }
        function getApaterno(){ return $this -> apaterno; }
        function getAmaterno(){ return $this -> amaterno; }
        function getNacimiento(){ return $this -> nacimiento; }
        function getCorreo(){ return $this -> correo; }
        function getFotografia(){ return $this -> fotografia; }

        function setIdPaciente($id_paciente){ $this->id_paciente = $id_paciente; }
        function setNombre($nombre){ $this -> nombre = $nombre; }
        function setApaterno($apaterno){ $this -> apaterno = $apaterno; }
        function setAmaterno($amaterno){ $this -> amaterno = $amaterno; }
        function setNacimiento($nacimiento){ $this -> nacimiento = $nacimiento; }
        function setCorreo($correo){ $this -> correo = $correo; }
       function setFotografia($fotografia){ $this -> fotografia = $fotografia; }

        /*
        * Método para insertar un registro de paciente a la base de datos hospital
        * Params String @nom recibe el nombre del paciente
        *        String @apa recibe el apellido paterno del paciente
        *        String @ama recibe el apellido materno del paciente
        *        Date   @nac recibe la fecha de nacimiento del paciente   
        * Return integer con la cantidad de registros afectados
        */

        function create($nombre, $apaterno, $amaterno, $nacimiento, $correo){
           $this->connect();
         $sentencia = "INSERT INTO paciente(nombre, apaterno, amaterno, nacimiento, correo)
                        VALUES(:nombre, :apaterno, :amaterno, :nacimiento, :correo)";
            $stmt = $this->con->prepare($sentencia);
            $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt -> bindParam(":apaterno", $apaterno, PDO::PARAM_STR);
            $stmt -> bindParam(":amaterno", $amaterno, PDO::PARAM_STR);
            $stmt -> bindParam(":nacimiento", $nacimiento, PDO::PARAM_STR);
            $stmt -> bindParam(":correo", $correo, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt;  
            
        }
    
       /* catch(Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            $dbh -> rollBack();
        }
        $dbh -> rollBack();
    }*/

    /*function guardarFotografia(){ 
        $archivo = $_FILES['fotografia'];
        $tipos = array('image/jpeg', 'image/png', 'image/gif');
        if($archivo['error'] == 0)
        {
            if(in_array($archivo['type'],$tipos))
            {
                if($archivo['size'] <= 2097152)
                {
                        $a = explode('/', $archivo['type']);
                        $nueva_imagen = MD5(time()) . '.' . $a[1];
                        if(move_uploaded_file($archivo['tmp_name'], 'archivos/' . $nueva_imagen))
                        {
                            return $nueva_imagen; 
                        }
                 }
            
            }
        }
        else{
            return false;
        }
    }*/
   /* public function cargarImagen($dimension, $destino)
    {
        if ($_FILES[$dimension]['error'] == 0) {
            $tiposPermitidos = array("image/gif", "image/jpeg", "image/png");
            if (in_array($_FILES[$dimension]['type'], $tiposPermitidos)) {
                if ($_FILES[$dimension]['size'] <= 512000) {
                    $nombre = md5(time());
                    $extension = explode("/", $_FILES[$dimension]['type']);
                    $nombre = $nombre . "." . $extension[1];
                    $destino = $destino . $nombre;
                    if (move_uploaded_file($_FILES[$dimension]['tmp_name'], $destino)) {
                        return $nombre;
                    }
                }
            }
        }
        return null;
    }*/

            public function readPaciente($id_paciente)
            {
                $this->connect();
                $sentencia = 'SELECT * FROM paciente p WHERE id_paciente = :id_paciente';
                $stmt = $this->con->prepare($sentencia);
                $stmt -> bindParam(":id_paciente", $id_paciente, PDO::PARAM_INT);
                $stmt->execute();
                $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $datos=(isset($datos[0]))?$datos[0]:null;
                return $datos;
            }

            public function read()
            {
                $this->connect();
                $sql = "SELECT * FROM paciente";
                $stmt = $this->con->prepare($sql);
                $stmt->execute();
                $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $datos;
            }
  
    }
    $paciente = New Paciente;