<?php 
class Usuario
{

    private $idusuario=null;
    private $tipousuario=null;
    private $nombreyapellido=null;
    private $documentoidentidad= null;
    private $telefono=null;
    private $cuenta=null;
    private $clave=null;
    private $estado=null;

    public function __construct($idusuario,$tipousuario,$nombreyapellido,$documentoidentidad,$telefono,$cuenta,$clave,$estado){

        $this->idusuario=$idusuario;
        $this->tipousuario=$tipousuario;
        $this->nombreyapellido=$nombreyapellido;        
        $this->documentoidentidad=$documentoidentidad;
        $this->telefono=$telefono;
        $this->cuenta=$cuenta;
        $this->clave=$clave;
        $this->estado=$estado;

    }
    
    public function setIdusuario($idusuario){
        
        $this->idusuario=$idusuario;
        
    }
    
    public function getIdusuario(){
        
        return $this->idusuario;        
    }

    public function setTipousuario($tipousuario){
        
        $this->tipousuario=$tipousuario;
        
    }
    
    public function getTipousuario(){
        
        return $this->tipousuario;        
    }

    public function setNombreapellido($nombreyapellido){
        
        $this->nombreyapellido=$nombreyapellido;
        
    }
    
    public function getNombreapellido(){
        
        return $this->nombreyapellido;        
    }

    public function setDocumentoidentidad($documentoidentidad){
        
        $this->documentoidentidad=$documentoidentidad;
        
    }
    
    public function getDocumentoidentidad(){
        
        return $this->documentoidentidad;        
    }

    public function setTelefono($telefono){
        
        $this->telefono=$telefono;
        
    }
    
    public function getTelefono(){
        
        return $this->telefono;        
    }
    
    public function setCuenta($cuenta){
        
        $this->cuenta=$cuenta;
        
    }
    
    public function getCuenta(){
        
        return $this->cuenta;        
    }

    public function setClave($clave){
        
        $this->clave=$clave;
        
    }
    
    public function getClave(){
        
        return $this->clave;        
    }

    public function setEstado($estado){
        
        $this->estado=$estado;
        
    }
    
    public function getEstado(){
        
        return $this->estado;        
    }   

}
?>