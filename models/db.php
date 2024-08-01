<?php
    class database {
        public static function connect() {
            $conexion = new mysqli("localhost","root","","dbmoneymanager");
            $conexion -> query("SET NAMES 'utf8'");
            return $conexion;
        }
    }
?>
