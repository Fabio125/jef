<?php 
    require_once("../conexion/Conexion.php");

    class MSerie
    {

        private $conexion=null;
        private $consulta=null;
        private $stmt=null;
        private $dato=null;

        public function __construct(){      
                
            $this->conexion=((new Conexion())->getConexion());                 
        }

        
        public function Busca_Serie($codigodoc, $codigoalma)
        {
            try {
               
                $ser=null;
                $this->consulta="CALL BuscaSeriexDocumento(?,?)";
                $this->stmt=$this->conexion->prepare($this->consulta);
                $this->stmt->bindParam(1,$doc);
                $this->stmt->bindParam(2,$alm);
                $doc = $codigodoc;
                $alm = $codigoalma;
                $this->stmt->execute();
                
                $this->dato=$this->stmt->fetch();
                
                if(sizeof($this->dato)>0){                    
                    
                    $ser=new Serie(
                        $this->dato["codSerie"],
                        $this->dato["serie"],
                        $this->dato["numeracion"],
                        $this->dato["nombreimpresora"],
                        $this->dato["papersize"],
                        $this->dato["preimpreso"]
                    );
     				     
                }
                $this->stmt->closeCursor();

            return $ser;
            
            } catch (exception $e) {
                        
                echo "Error en Operacion: " . $e->getMessage();     
                return $ser;
            }
        }
    }
?>