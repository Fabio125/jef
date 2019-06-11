<?php 
class Conexion
{
    private $server=null;
    private $user=null;
    private $pass=null;
    private $bd=null;
    private $conexion=null;
    private $cadena_conexion=null;
    
    public function __construct(){
    
        $this->server="panaderiaelmolino.dyndns.org";
        $this->user="root";
        $this->pass="sge1234";
        $this->bd="database_artedelpan_prueba";         
    }
    
    public function getConexion(){
    
      try {
        
             $this->cadena_conexion="";
             $this->cadena_conexion.="mysql:host=".$this->server.";";
             $this->cadena_conexion.="dbname=".$this->bd;
             
             $this->conexion=new PDO($this->cadena_conexion, $this->user, $this->pass,array(PDO::ATTR_PERSISTENT => true));
             $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
             return  $this->conexion;
       
       } catch (Exception $e) {
        
             die("Error de Conexion: " .$e->getMessage());  
			 return null;                   
       }

    }      		 
}

?>