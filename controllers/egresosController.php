<?php
    require_once(__DIR__ . '/../models/egresosModel.php');
    require_once(__DIR__ . '/../models/registroModel.php');

    $alert = " ";

    if (!empty($_POST['btnEnviarEgreso'])) {
        $concepto = isset($_POST['concepto']) ? $_POST['concepto'] : false;
        $monto = isset($_POST['monto']) ? $_POST['monto'] : false;
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
        $emailUsuario = isset($_SESSION['usuario_email']) ? $_SESSION['usuario_email'] : false;

        if ($concepto && $monto && $fecha && $categoria) {
            $egreso = new egresosModel();
            $persona = new registroModel();

            $egreso->setConcepto($concepto);
            $egreso->setMonto($monto);
            $egreso->setFecha($fecha);
            $egreso->setIdCategoria($categoria);
            $idUsuario = $persona->consultaridPersona($emailUsuario);
            $egreso->setIdUsuario($idUsuario);
            
            $guardar = $egreso->guardarEgreso();
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