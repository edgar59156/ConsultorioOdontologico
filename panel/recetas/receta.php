<?php
require_once('../../models/receta.class.php');

$id_cita = null;
$accion = null;
if (isset($_GET['accion'])) {
    $id_cita = isset($_GET['id_cita']) ? $_GET['id_cita'] : null;
    $accion = $_GET['accion'];
}



switch ($accion) {
    case 'readOne':
        
        break;

    case 'new':
        
        break;

    case 'add':
        $datos = $_POST;
        print_r($_POST);
        $resultado = $receta->create($datos);
        $receta->mensaje($resultado,($resultado)?"La receta se agrego correctamente":"Ocurrió un error");
        $datosOdontologo = $receta->readOdontologo();
        $datosPaciente = $receta->readPaciente();
        $datosCita = $receta->readCita();
        print_r($datosCita);
        print_r($datosOdontologo);
        print_r($datosPaciente);
        require_once('../../views/recetas/form.php');
        break;

    case 'modify':
       
        break;

    case 'update':
        
        break;

    case 'delete':
       
    default:
        $datosOdontologo = $receta->readOdontologo();
        $datosPaciente = $receta->readPaciente();
        $datosCita = $receta->readCita();

        require_once('../../views/recetas/form.php');
 
}

?>