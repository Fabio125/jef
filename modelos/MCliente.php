<?php 
require_once("../conexion/Conexion.php");
class MCliente{

    private $conexion=null;
    private $consulta=null;
    private $stmt=null;
    private $dato=null;

    public function __construct(){      
             
        $this->conexion=((new Conexion())->getConexion());                 
    }

    public function buscar_clientexndocumento($documento){

        try {
               
                $cliente=null;
                $this->consulta="CALL ConsultaCliente(?)";
                $this->stmt=$this->conexion->prepare($this->consulta);
                $this->stmt->bindParam(1,$cliDNIRUC);          
                $cliDNIRUC=$documento;               
                $this->stmt->execute();
                
                $this->dato=$this->stmt->fetch();
                
                if(sizeof($this->dato)>0){                    
                    
                    $cliente=new Cliente(
                        $this->dato[0],
                        $this->dato[3],
                        $this->dato[1],
                        $this->dato[3],
                        $this->dato[2],
                        $this->dato[6]                        
                    );
     				     
                }
                $this->stmt->closeCursor();

            return $cliente;
            
        } catch (exception $e) {
                    
            echo "Error en Operacion: " . $e->getMessage();     
            return $cliente;  
        }
    }    
}
?>