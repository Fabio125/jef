<?php 
require_once("../modelos/MProducto.php");

class CProducto{

    private $producto=null;

    public function __construct(){

        $this->mproducto=new MProducto();
    }

    

    public function listar_poductospordepartamento($depa){

        try {
        
            return  $this->mproducto->listar_poductospordepartamento($depa);
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }
}
?>