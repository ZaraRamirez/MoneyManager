<?php
    require_once(__DIR__ . '/../models/contactosModel.php');

    $alert = " ";

          if(!empty($_POST['btnEnviarContacto'])){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $correo = isset($_POST['correo']) ? $_POST['correo'] : false;
            $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : false;
            if($nombre && $correo && $mensaje){

                $contacto = new contactosModel();
                $contacto->setNombre( $nombre );
                $contacto->setCorreo($correo);
                $contacto->setMensaje($mensaje);
                $guardar=$contacto->guardarContactos();
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