<?php
require_once('../../models/paciente.class.php');
require_once('../../models/receta.class.php');
$sistema = new Sistema;
$pacientes = new Paciente;

$action = (isset($_GET['action'])) ? $_GET['action'] : 'read';
switch ($action) {
    case 'create':
        require_once('../../views/registro/form.php');
        break;
    case 'agendar':
        require_once('../../views/citas/test.php');
        break;
    case 'prescribir':
        $datosOdontologo = $receta->readOdontologo();
        $datosPaciente = $receta->readPaciente();
        $datosCita = $receta->readCita();
        require_once('../../views/recetas/form.php');
        require_once('../../views/recetas/form.php');
        break;

    case 'save':
        $datos = $_POST['paciente'];
        print_r($_POST);
        $resultado = $pacientes->create($datos['nombre'], $datos['apaterno'], $datos['amaterno'], $datos['nacimiento'], $datos['correo']);
        $datos = $pacientes->readPaciente();
        print_r($datos);

        include('../../views/registro/index.php');
        break;
        /* case 'delete':
            $id_paciente = $_GET['id_paciente'];
            $resultado = $pacientes -> delete($id_paciente);
            $datos = $pacientes -> read();
            include('views/pacientes/index.php');
            break;
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
