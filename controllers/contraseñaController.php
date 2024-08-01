<?php

    require_once(__DIR__ . '/../models/contraseñaModel.php');

    $alert = " ";

    if (!empty($_POST['btnCambiarContraseña'])) {
        $password = isset($_POST['contraseña']) ? $_POST['contraseña'] : false;
        $nuevaContraseña = isset($_POST['nuevacontraseña']) ? $_POST['nuevacontraseña'] : false;
        $nuevaContraseña2 = isset($_POST['nuevacontraseña2']) ? $_POST['nuevacontraseña2'] : false;

        if ($nuevaContraseña != $nuevaContraseña2) {
            $alert = "warning";
        }elseif ($password && $nuevaContraseña && $nuevaContraseña2) {
            $contraseña = new contraseñaModel();
            $contraseña->setPassword($password);
            $contraseña->setNuevaContraseña($nuevaContraseña);
            $contraseña->setNuevaContraseña2($nuevaContraseña2);
            
            $guardar = $contraseña->actualizarContraseña();
            if ($guardar) {
                $alert = "success";
            } else {
                $alert = "danger";
            }
        } else {
            $alert = "warning";
        }
        echo $_SESSION['usuario_id'];
    }    
?>