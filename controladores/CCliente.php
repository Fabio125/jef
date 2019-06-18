<?php
require_once("../modelos/MCliente.php");

class CCliente{

    private $mcliente=null;

    public function __construct(){

        $this->mcliente=new MCliente();
    }    

    public function buscar_clientexndocumento($documento){

        try {
        
            return  $this->mcliente->buscar_clientexndocumento($documento);
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }

    public function registrar_cliente($cliente,$usuario){

        try {
        
            return  $this->mcliente->registrar_cliente($cliente,$usuario);
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }
}
?>

