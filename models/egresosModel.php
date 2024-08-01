<?php
    require_once 'db.php';

    class egresosModel {
        private $id;
        private $concepto;
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
            return $this -> idEgreso;
        }
        public function setId($id){
            $this -> idEgreso = $this -> db -> real_escape_string($id);
        }

        public function getConcepto(){
            return $this -> Concepto;
        }
        public function setConcepto($concepto){
            $this -> Concepto = $this -> db -> real_escape_string($concepto);
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
        public function guardarEgreso(){
            $sql = "INSERT INTO tbl_egresos VALUES 
                (NULL,
                '{$this -> getConcepto()}',
                '{$this -> getMonto()}',
                '{$this -> getFecha()}',
                '{$this -> getIdCategoria()}',
                '{$this -> getIdUsuario()}');";

            $guardar = $this -> db -> query($sql);
            $result = $guardar ? true : false;
            return $result; 
        }

        // Consultar 
        public function consultarEgresos($idUsuario){
            $sql = "SELECT egresos.idEgreso, egresos.Concepto, egresos.Monto, egresos.Fecha, categoria.NombreCategoria AS nombreCategoria
                    FROM tbl_egresos AS egresos
                    INNER JOIN tbl_categoriaEgresos AS categoria 
                    ON egresos.idCategoria = categoria.idCatEgresos
                    WHERE egresos.idUsuario = '$idUsuario'";
            $egresos = $this->db->query($sql);
        
            return $egresos;
        }

        // Eliminar
        public function eliminarEgreso($id){
            $sql = "DELETE FROM tbl_egresos WHERE idEgreso = {$id}";
            $eliminado = $this -> db -> query($sql);
            $result = $eliminado ? true : false;
            return $result;
        }
    }
?>