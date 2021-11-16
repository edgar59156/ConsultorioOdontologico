<?php
require_once('../../models/citas.class.php');
require_once('../../views/header/header.php');

// controlador
// manda llamar funcions de modelo o clase (citas.class.php)
$accion = (isset($_GET['accion'])) ? $_GET['accion'] : 'read';

// if (isset($_GET['accion'])) {
//     $id_cita = isset($_GET['id_cita']) ? $_GET['id_cita'] : null;
//     $accion = $_GET['accion'];
// }

switch ($accion) {
    case 'readOne':
        
        break;

    case 'new':
        
        break;

    case 'add':
        $datos = $_POST;
        // print_r($datos);
        $resultado = $Cita->create($datos);
        $Cita->mensaje($resultado,($resultado)?"Cita agendada correctamente":"Error al agendar cita");

        require_once('../../views/citas/test.php');
        break;

    case 'modify':
       
        break;

    case 'update':
        
        break;

    case 'delete':
       
    default:
        // print($_POST['accion']);
        require_once('../../views/citas/test.php');
 
}

?>