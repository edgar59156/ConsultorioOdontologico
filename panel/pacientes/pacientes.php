<?php
require_once('../../models/paciente.class.php');
require_once('../../models/receta.class.php');
require_once('../../views/header/header.php');
require_once('../../models/citas.class.php');
$sistema = new Sistema;
$pacientes = new Paciente;

$action = (isset($_GET['action'])) ? $_GET['action'] : 'read';
switch ($action) {
    case 'create':
        require_once('../../views/registro/form.php');
        break;
    case 'agendar':
        $datosPaciente = $receta->readPaciente($_GET['id_paciente']);
        //$Cita->mensaje($resultado,($resultado)?"Cita agendada correctamente":"Error al agendar cita");
        require_once('../../views/citas/test.php');
        break;

    /*case 'add1':
           // $datos = $_POST;
            print_r($datos);
            $resultado = $Cita->create($datos);
            print_r($datos);
            $Cita->mensaje($resultado,($resultado)?"Cita agendada correctamente":"Error al agendar cita");
            require_once('../../views/citas/test.php');
            break;

    */
    case 'prescribir':
        $datosOdontologo = $receta->readOdontologo();
        $datosPaciente = $receta->readPaciente($_GET['id_paciente']);
        $datosCita = $receta->readCita($_GET['id_paciente']);
        require_once('../../views/recetas/form.php');
        break;

    case 'save':
        $paciente = $_POST['paciente'];
       // $fotografia=$_POST['fotografia'];
      //  echo ('<pre>');
       // print_r($_POST);
        $resultado = $pacientes->create($paciente['nombre'], $paciente['apaterno'], $paciente['amaterno'], $paciente['nacimiento'], $paciente['correo']);
        $pacientes->mensaje($resultado,($resultado)?"El paciente se agrego correctamente":"Ocurrió un error");
        $datos = $pacientes->read();
        require_once('../../views/pacientes/index.php');
        break;

    case 'prescribir':
            $id_paciente = $_GET['id_paciente'];
            $datos = $pacientes -> readPaciente();
            include('views/recetas/form.php');
        break;
       /*
            case 'show':
            $id_paciente = $_GET['id_paciente'];
            $datos = $pacientes -> readOne($id_paciente);
            include('views/pacientes/form.php');
            break;
        case 'update':
            $paciente = $_POST['paciente'];
            $resultado = $pacientes -> update($paciente['id_paciente'],$paciente['nombre'],$paciente['apaterno'],$paciente['amaterno'],$paciente['nacimiento'],$paciente['domicilio']);
            $datos = $pacientes -> read();
            include('views/pacientes/index.php');
            break;*/
        /*  case 'my':
            $datos = $pacientes -> read(true);
            include('views/registro/index.php');
            break;*/

        /*  case 'consulta':
            $id_paciente = $_GET['id_paciente'];
            $datos = $pacientes -> readOne($id_paciente);
            $consultas = $consulta->read($id_paciente);
            include('views/pacientes/consulta.php');
            break;

        case 'nueva_consulta':
            $consul = $_POST['consulta'];
            $resultado = $consulta->create($consul['id_paciente'],$consul['padecimiento'],$consul['tratamiento']);
            $id_paciente = $consul['id_paciente'];
            $datos = $pacientes->readOne($id_paciente);
            $consultas = $consulta->read($id_paciente);
            include('views/pacientes/consulta.php');
            break;

        case 'receta':
            include('consulta.report.php');
            break; 

        case 'insertar':
            $data = file_get_contents("../json/pacientes.json");
            $datos = $pacientes->insert($data);
            break;
        case 'exportar':
            $id_paciente = $_GET['id_paciente'];
            $paciente = $pacientes->exportar($id_paciente);
            $data = json_encode($paciente[0]);
            header('Content-Type: application/json');
            echo $data;
          //  $datos = $pacientes->insert($data);
            break;*/
    default:
        $datos = $paciente->read();
        require_once('../../views/pacientes/index.php');
}

   // include('views/footer.php');
