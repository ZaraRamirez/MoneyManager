<?php
    require_once(__DIR__ . '/../models/ingresosModel.php');
    require_once(__DIR__ . '/../models/registroModel.php');

    $alert = " ";

    if (!empty($_POST['btnEnviarIngreso'])) {
        $medio = isset($_POST['medio']) ? $_POST['medio'] : false;
        $monto = isset($_POST['monto']) ? $_POST['monto'] : false;
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
        $emailUsuario = isset($_SESSION['usuario_email']) ? $_SESSION['usuario_email'] : false;

        if ($medio && $monto && $fecha && $categoria) {
            $ingreso = new ingresosModel();
            $persona = new registroModel();

            $ingreso->setMedio($medio);
            $ingreso->setMonto($monto);
            $ingreso->setFecha($fecha);
            $ingreso->setIdCategoria($categoria);
            $idUsuario = $persona->consultaridPersona($emailUsuario);
            $ingreso->setIdUsuario($idUsuario);
            
            $guardar = $ingreso->guardarIngreso();
            if ($guardar) {
                $alert = "success";
            } else {
                $alert = "danger";
            }
        } else {
            $alert = "warning";
        }
    } 
?>