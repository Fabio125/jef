<?php 
require_once("../modelos/MUsuario.php");

class CUsuario{

    private $musuario=null;

    public function __construct(){

        $this->musuario=new MUsuario();
    }

    public function buscar_usuarioxcuentaclave($usuario){

        try {
        
                return  $this->musuario->buscar_usuarioxcuentaclave($usuario);
      
        } catch (Exception $e) {
       
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }

    public function listar_usuarioxempresa(){

        try {
        
            return  $this->musuario->listar_usuarioxempresa();
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }
}
?>