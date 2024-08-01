<?php
   require_once 'db.php';

class contactosModel{
    private $id;
    private $nombre;
    private $correo;
    private $mensaje;

    //conexion a la base de datos
    private $db;
    public function __construct(){
        $this -> db = Database::connect();      
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$this->db->real_escape_string($id);
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$this->db->real_escape_string($nombre);
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo($correo){
        $this->correo=$this->db->real_escape_string($correo);
    }
    public function getMensaje(){
        return $this->mensaje;
    }
    public function setMensaje($mensaje){
        $this->mensaje=$this->db->real_escape_string($mensaje);
    }

    public function guardarContactos(){
        $sql="INSERT INTO tbl_contactenos VALUES
        (NULL,
        '{$this->getNombre()}',
        '{$this->getCorreo()}',
        '{$this->getMensaje()}');";

        $guardar = $this -> db -> query($sql);
        $result = $guardar ? true : false;
        return $result;
    }   

}
        
?>