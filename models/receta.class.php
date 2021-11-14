<?php
require_once('sistema.class.php');


class Receta extends Sistema
{

    public $id_consulta;
    public $id_cita;
    public $id_paciente;
    public $id_odontologo;
    public $tratamiento;
    public $descripcion;


    /**
     * Recuperar un arreglo de ponentes
     *
     * @return  arreglo
     */

    public function readOdontologo()
    {
        $this->connect();
        $sql = "SELECT  *  from odontologo WHERE id_odontologo = 1";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $datos=(isset($datos[0]))?$datos[0]:null;
        return $datos;
    }
    public function readPaciente()
    {
        $this->connect();
        $sql = "SELECT  *  from paciente WHERE id_paciente = 1";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $datos=(isset($datos[0]))?$datos[0]:null;
        return $datos;
    }
    public function readCita()
    {
        $this->connect();
        $sql = "SELECT  *  from cita where id_cita = 1";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $datos=(isset($datos[0]))?$datos[0]:null;
        return $datos;
    }


    /**
     * Recuperar un ponente
     *@integar id_ponente
     * @return  self
     */
    public function readOne($id_evento)
    {
        $this->connect();
        $sql = "SELECT id_evento,evento,contrasena,nombre,primer_apellido,segundo_apellido,fotografia,telefono  from usuario where id_evento = :id_evento";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id_evento', $id_evento, PDO::PARAM_INT);
        $stmt->execute();
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $datos = (isset($datos[0])) ? $datos[0] : null;
        return $datos;
    }

   

    /**
     * Crear un ponente e insertarlo en la base de datos
     *
     * @return  boolean
     */

     

    public function create($datos)
    {
        $this->connect();
  
            $sql = "INSERT into consulta (id_cita,id_odontologo,id_paciente,tratamiento) 
            values (1,1,1,:tratamiento)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':tratamiento', $datos['tratamiento'], PDO::PARAM_STR);
        $rs = $stmt->execute();
        return $rs;
    }
    /**
     * Modificar los datos de un poenente
     *
     * @return  boolean
     */
     /*
    public function update($datos, $id_evento)
    {
        require_once('usuario_rol.class.php');
        $usuarioRol = new UsuarioRol;

        $this->connect();
        $rs = $usuarioRol->delete($id_evento);
        if (isset($datos['roles'])) {
            foreach ($datos['roles'] as $key => $value) {
                $usuarioRol->create($id_evento, $value);
            }
        }
        $sql = "UPDATE usuario set evento=:correo where id_evento=:id_usuario";
        if (strlen($datos['contrasena']) > 0) {
            $sql = "UPDATE usuario set correo=:correo, contrasena=:contrasena where id_usuario=:id_usuario";
        }
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':correo', $datos['correo'], PDO::PARAM_STR);
        if (strlen($datos['contrasena']) > 0) {
            $datos['contrasena'] = md5($datos['contrasena']);
            $stmt->bindParam(':contrasena', $datos['contrasena'], PDO::PARAM_STR);
        }
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->rowCount();
    }


    /**
     * Eliminar un ponente
     *
     * @return  boolean
     */
     /*
    public function delete($id_usuario)
    {
        $this->connect();
        $sql = "delete from usuario where id_usuario=:id_usuario";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $rs = $stmt->execute();
        return $stmt->rowCount();
    }

    public function credentials($correo){
        $_SESSION['correo'] = $correo;
        $this -> connect();
        $sql = "SELECT r.rol from rol r inner join usuario_rol u on r.id_rol=u.id_rol INNER JOIN usuario us on u.id_usuario= us.id_usuario where us.correo=:correo";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
        $stmt->execute();
        $datos = array();
        $_SESSION['roles'] = array();
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($datos as $key => $value){
            array_push($_SESSION['roles'],$value['rol']);
        }
        $_SESSION['validado'] = true;
        
  
    }
    */

    /**
     * Get the value of id_consulta
     */ 
    public function getId_consulta()
    {
        return $this->id_consulta;
    }

    /**
     * Set the value of id_consulta
     *
     * @return  self
     */ 
    public function setId_consulta($id_consulta)
    {
        $this->id_consulta = $id_consulta;

        return $this;
    }

    /**
     * Get the value of id_cita
     */ 
    public function getId_cita()
    {
        return $this->id_cita;
    }

    /**
     * Set the value of id_cita
     *
     * @return  self
     */ 
    public function setId_cita($id_cita)
    {
        $this->id_cita = $id_cita;

        return $this;
    }

    /**
     * Get the value of id_paciente
     */ 
    public function getId_paciente()
    {
        return $this->id_paciente;
    }

    /**
     * Set the value of id_paciente
     *
     * @return  self
     */ 
    public function setId_paciente($id_paciente)
    {
        $this->id_paciente = $id_paciente;

        return $this;
    }

    /**
     * Get the value of id_odontologo
     */ 
    public function getId_odontologo()
    {
        return $this->id_odontologo;
    }

    /**
     * Set the value of id_odontologo
     *
     * @return  self
     */ 
    public function setId_odontologo($id_odontologo)
    {
        $this->id_odontologo = $id_odontologo;

        return $this;
    }

    /**
     * Get the value of tratamiento
     */ 
    public function getTratamiento()
    {
        return $this->tratamiento;
    }

    /**
     * Set the value of tratamiento
     *
     * @return  self
     */ 
    public function setTratamiento($tratamiento)
    {
        $this->tratamiento = $tratamiento;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}
$receta = new Receta;
