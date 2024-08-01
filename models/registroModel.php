<?php
    require_once 'db.php';

    class registroModel {
        private $id;
        private $nombre;
        private $email;
        private $password;
        private $telefono;
    
        // Conexión a la base de datos
        private $db;
        public function __construct() {
            $this -> db = Database::connect();
        }

        // Gets and sets
        public function getId(){
            return $this -> idPersona;
        }
        public function setId($id){
            $this -> idPersona = $this -> db -> real_escape_string($id);
        }

        public function getNombre(){
            return $this -> Nombre;
        }
        public function setNombre($nombre){
            $this -> Nombre = $this -> db -> real_escape_string($nombre);
        }

        public function getEmail(){
            return $this -> Email;
        }
        public function setEmail($email){
            $this -> Email = $this -> db -> real_escape_string($email);
        }

        public function getPassword(){
            return $this -> Password;
        } 
        public function setPassword($password){
            $this -> Password = $this -> db -> real_escape_string($password);
        }

        public function getTelefono(){
            return $this -> Telefono;
        }
        public function setTelefono($telefono){
            $this -> Telefono = $this -> db -> real_escape_string($telefono);
        }

        // Guardar Datos
        public function guardarRegistro(){
            $sql = "INSERT INTO tbl_persona VALUES 
                (NULL,
                '{$this -> getNombre()}',
                '{$this -> getEmail()}',
                '{$this -> getPassword()}',
                '{$this -> getTelefono()}');";
            $guardar = $this -> db -> query($sql);
            $result = $guardar ? true : false;
            return $result;
        }

        // Consultar 
        public function consultaridPersona($email){
            $sql = "SELECT persona.idPersona
                    FROM tbl_persona AS persona
                    WHERE persona.Email = '$email'";
            $result = $this->db->query($sql);

            if ($result) {
                $row = $result->fetch_assoc();
                return $row['idPersona'];
            } else {
                return null;
            }
        }
    }
?>