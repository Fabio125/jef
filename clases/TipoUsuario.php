<?php 
class Tipousuario{

    private $idtipousuario=null;
    private $descripcion=null;
    private $estado=null;
  
    public function __construct($idtipousuario,$descripcion,$estado){      
             
        $this->idtipousuario=$idtipousuario;
        $this->descripcion=$descripcion;
        $this->estado=$estado;

    }

    public function setIdtipousuario($idtipousuario){
        
        $this->idtipousuario=$idtipousuario;
        
    }
    
    public function getIdtipousuario(){
        
        return $this->idtipousuario;        
    }

    public function setDescripcion($descripcion){
        
        $this->descripcion=$descripcion;
        
    }
    
    public function getDescripcion(){
        
        return $this->descripcion;        
    }

    public function setEstado($estado){
        
        $this->estado=$estado;
        
    }
    
    public function getEstado(){
        
        return $this->estado;        
    }
}
?>