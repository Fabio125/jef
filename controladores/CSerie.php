<?php 
require_once("../modelos/MSerie.php");

class CSerie
{

    private $mserie=null;

    public function __construct(){

        $this->mserie=new MSerie();
    }

    public function Busca_Serie($codigodoc, $codigoalma)
    {
        try {
        
                return  $this->mserie->Busca_Serie($codigodoc, $codigoalma);
      
        } catch (Exception $e) {
       
            die("Error de Conexion: " .$e->getMessage());  
            return null;                   
        }
    }
}
?>