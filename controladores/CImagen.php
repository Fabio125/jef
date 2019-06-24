<?php
require_once("../modelos/MImagen.php");

class CImagen{

    private $mimagen=null;

    public function __construct(){

        $this->mimagen=new MImagen();
    }   

    public function Sp_registrarimagen($imagen){

        try {
        
            return  $this->mimagen->Sp_registrarimagen($imagen);
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }

    public function Sp_actualizarimagen($imagen){

        try {
        
            return  $this->mimagen->Sp_actualizarimagen($imagen);
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }

    public function Sp_listarimagen_xestado(){

        try {
        
            return  $this->mimagen->Sp_listarimagen_xestado();
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }

    public function Sp_listarimagen_xid($idimagen){

        try {
        
            return  $this->mimagen->Sp_listarimagen_xid($idimagen);
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }
}
?>