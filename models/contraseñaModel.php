<?php
   require_once 'db.php';

class contraseñaModel{
    private $emailUsuario;
    private $password;
    private $nuevaContraseña;
    private $nuevaContraseña2;

    //conexion a la base de datos
    private $db;
    public function __construct(){
        $this -> db = Database::connect();      
    }

    public function getEmailUsuario(){
        return $this->emailUsuario;
    }

    public function setEmailUsuario($emailUsuario){
        $this->emailUsuario=$this->db->real_escape_string($emailUsuario);
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password=$this->db->real_escape_string($password);
    }
    public function getNuevaContraseña(){
        return $this->nuevaContraseña;
    }
    public function setNuevaContraseña($nuevaContraseña){
        $this->nuevaContraseña=$this->db->real_escape_string($nuevaContraseña);
    }

    public function getNuevaContraseña2(){
        return $this->nuevaContraseña2;
    }
    public function setNuevaContraseña2($nuevaContraseña2){
        $this->nuevaContraseña2=$this->db->real_escape_string($nuevaContraseña2);
    }

    public function actualizarContraseña(){

        $emailUsuario = isset($_SESSION['usuario_email']) ? $_SESSION['usuario_email'] : null;
        $sql = "UPDATE tbl_persona SET Password = '{$this->getNuevaContraseña()}' WHERE Email = '$emailUsuario' AND Password = '{$this->getPassword()}'";
        $guardar = $this->db->query($sql);
        $result = $guardar ? true : false;
              
        return $result;
    }

}
        
?>