<?php
    require_once 'db.php';

    class ingresosModel {
        private $id;
        private $medio;
        private $monto;
        private $fecha;
        private $categoria;
        private $usuario;
    
        // Conexión a la base de datos
        private $db;
        public function __construct() {
            $this -> db = Database::connect();
        }

        // Gets and sets
        public function getId(){
            return $this -> idIngreso;
        }
        public function setId($id){
            $this -> idIngreso = $this -> db -> real_escape_string($id);
        }

        public function getMedio(){
            return $this -> Medio;
        }
        public function setMedio($medio){
            $this -> Medio = $this -> db -> real_escape_string($medio);
        }

        public function getMonto(){
            return $this -> Monto;
        }
        public function setMonto($monto){
            $this -> Monto = $this -> db -> real_escape_string($monto);
        }

        public function getFecha(){
            return $this -> Fecha;
        } 
        public function setFecha($fecha){
            $this -> Fecha = $this -> db -> real_escape_string($fecha);
        }

        public function getIdCategoria(){
            return $this -> idCategoria;
        }
        public function setIdCategoria($categoria){
            $this -> idCategoria = $this -> db -> real_escape_string($categoria);
        }

        public function getIdUsuario(){
            return $this -> idUsuario;
        }
        public function setIdUsuario($usuario){
            $this -> idUsuario = $this -> db -> real_escape_string($usuario);
        }

        // Guardar 
        public function guardarIngreso(){
            $sql = "INSERT INTO tbl_ingresos VALUES 
                (NULL,
                '{$this -> getMedio()}',
                '{$this -> getMonto()}',
                '{$this -> getFecha()}',
                '{$this -> getIdCategoria()}',
                '{$this -> getIdUsuario()}');";

            $guardar = $this -> db -> query($sql);
            $result = $guardar ? true : false;
            return $result; 
        }

        // Consultar 
        public function consultarIngresos($idUsuario){
            $sql = "SELECT ingresos.idIngreso, ingresos.Medio, ingresos.Monto, ingresos.Fecha, categoria.nombreCategoria AS nombreCategoria
                    FROM tbl_ingresos AS ingresos
                    INNER JOIN tbl_categoriaIngresos AS categoria 
                    ON ingresos.idCategoria = categoria.idCatIngresos
                    WHERE ingresos.idUsuario = '$idUsuario'";
            $ingresos = $this -> db -> query($sql);

            return $ingresos; 
        }

        // Eliminar
        public function eliminarIngreso($id){
            $sql = "DELETE FROM tbl_ingresos WHERE idIngreso = {$id}";
            $eliminado = $this -> db -> query($sql);
            $result = $eliminado ? true : false;
            return $result;
        }
    }
?>