<?php
    require_once(__DIR__ . '/../models/ingresosModel.php');
    require_once(__DIR__ . '/../models/egresosModel.php');
    
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $type = $_GET['type'];
    
        $ingresoModel = new ingresosModel();
        $egresoModel = new egresosModel();
    
        if ($type === 'ingreso') {
            if ($ingresoModel -> eliminarIngreso($id)) {
                $result = true;
            } else {
                $result = false;
            }
        } elseif ($type === 'egreso') {
            if ($egresoModel -> eliminarEgreso($id)) {
                $result = true;
            } else {
                $result = false;
            }
        } else {
            $result = false;
        }
    } else {
        $result = false;
    }
?>