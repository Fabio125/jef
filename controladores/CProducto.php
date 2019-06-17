<?php 
require_once("../modelos/MProducto.php");

class CProducto{

    private $mproducto=null;

    public function __construct(){

        $this->mproducto=new MProducto();
    }

    public function listar_productospordepartamento($depa){

        try {
        
            return  $this->mproducto->listar_productospordepartamento($depa);
  
        } catch (Exception $e) {
    
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }
}
?>